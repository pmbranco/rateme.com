<?php

	// Скелет модели
	class Model
	{
		// Таблица модели
		public static $mysql_table = NULL;
		
		// Переменные из таблицы (которые надо сохранять и тд)
		public $mysql_vars = array();
		
		// Переменные из таблицы MySQL, которые сохранять не надо
		protected $_exclude_vars = array("id");
		
		// Переменные
		public $isNewRecord = true;			// Новая запись
		
		// Конструктор
		public function __construct($array = false)
		{
			// Запрос к текущей БД на показ столбцов
			$Query = static::dbConnection()->query("SHOW COLUMNS FROM ".static::$mysql_table);
						
			// Динамически создаем переменные на основе таблицы	
			while ($data = $Query->fetch_assoc())
			{
				$this->mysql_vars[] = $data["Field"];
				$this->{$data["Field"]} = NULL;
			}
						
			// Если создаем по массиву
			if (is_array($array))
			{
				foreach ($array as $key => $val)
				{	
					$this->{$key} = $val;
				}
				
				// Если есть ID - он уже не новая запись
				if ($this->id)
				{
					$this->isNewRecord = false;	
				}
			}
		}
		
		/*
		 * Получаем все записи
		 * $params - дополнительные параметры (condition - дополнительное условие, order - параметры сортировки)
		 * $count - только подсчитываем кол-во найденных
		 */
		public static function findAll($params = array(), $count = false)
		{
			// Получаем все данные из таблицы + доп условие, если есть
			$result = static::dbConnection()->query("
				SELECT * FROM ".static::$mysql_table." 
				WHERE true ".(!empty($params["condition"]) ? " AND ".$params["condition"] : "") // Если есть дополнительное условие выборки
				.(!empty($params["order"]) ? " ORDER BY ".$params["order"] : "")				// Если есть условие сортировки
				);
	
			// Если успешно получили и (что-то есть или нужно просто подсчитать)
			if ($result && ($result->num_rows || $count))
			{
				// Если нужно только подсчитать
				if ($count)
				{
					return $result->num_rows;
				}
				
				// Получаем имя текущего класса
				$class_name = get_called_class();
				
				// Создаем массив объектов
				while ($array = $result->fetch_assoc())
				{
					$return[] = new $class_name($array);
				}
				
				// Возвращаем массив объектов
				return $return;
			}
			else
			{
				return false;
			}
		}
		
		/*
		 * Получаем одну запись
		 * $params - дополнительные параметры (condition - дополнительное условие, order - параметры сортировки)
		 */
		public static function find($params = array())
		{
			// Получаем все данные из таблицы + доп условие, если есть
			$result = static::dbConnection()->query("
				SELECT * FROM ".static::$mysql_table."
				WHERE true ".(!empty($params["condition"]) ? " AND ".$params["condition"] : "") // Если есть дополнительное условие выборки
				.(!empty($params["order"]) ? " ORDER BY ".$params["order"] : "")				// Если есть условие сортировки
				." LIMIT 1");
	
			// Если успешно получили
			if ($result->num_rows)
			{
				// Создаем объект
				$array = $result->fetch_assoc();
				
				// Получаем название класса
				$class_name = get_called_class();
				
				// Возвращаем объект
				return new $class_name($array);
			}
			else
			{
				return false;
			}
		}
		
		/* 
		 * Загрузка записи по ID
		 */
		public static function findById($id)
		{
			// Получаем все данные из таблицы
			$result = static::dbConnection()->query("SELECT * FROM ".static::$mysql_table." WHERE id=".$id);
					
			// Если успешно получили
			if ($result)
			{
				// Создаем объект
				$array = $result->fetch_assoc();
				
				// Получаем название класса
				$class_name = get_called_class();
				
				// Возвращаем объект
				return new $class_name($array);	
			}
			else
			{
				return false;
			}
		}
		
		/*
		 * Функция определяет соединение БД
		 */
		public static function dbConnection()
		{
			return dbSettings();	// По умолчанию возвращает подключение к бд Settings
		}
		
		/*
		 * Сохранение
		 */
		 public function save()
		 {
		 	// Перед сохранением
		 	$this->beforeSave();
		 	
		 	// Проверяем есть ли в бд шидзе с таким ID
			if ($this->isNewRecord)
			{
				// Составляем запрос на добавление новой записи
			 	foreach($this->mysql_vars as $field)
			 	{
			 		if (in_array($field, $this->_exclude_vars)) // Пропускаем поля, которые не надо сохранять
			 			continue;
			 		
			 		// Если значение установлено, будем его сохранять
			 		if (isset($this->{$field}))
			 		{
				 		$into[]		= $field;
				 		$values[]	= "'".$this->{$field}."'";		// Оборачиваем значение в кавычки
			 		}
			 	}

				$result = static::dbConnection()->query("INSERT INTO ".static::$mysql_table." (".implode(",", $into).") VALUES (".implode(",", $values).")");

				if ($result) {
					$this->id = $result->insert_id; // Получаем ID
					$this->isNewRecord = false;		// Уже не новая запись
					$this->afterSave();				// После сохранения
					return true;
				} else {
					return false;
				}
			}	
			else
			{
				// Составляем запрос на сохранение всего
			 	foreach($this->mysql_vars as $field)
			 	{
			 		if (in_array($field, $this->_exclude_vars)) // Пропускаем поля, которые не надо сохранять
			 			continue;
			 			
				 	$query[] = $field." = '".$this->{$field}."'";
			 	}
			 					
				$result = static::dbConnection()->query("UPDATE ".static::$mysql_table." SET ".implode(",", $query)." WHERE id=".$this->id);
				
				if ($result) {
					$this->afterSave();	// После сохранения
					return true;
				} else {
					return false;
				}
			}	
		 }
		 
		 
		 /*
		  * Перед сохранением
		  */
		 public function beforeSave()
		 {
			 // Будет переопределяться в child-классах
		 }
		 
		 /*
		  * После сохранения
		  */
		 public function afterSave()
		 {
			 // Будет переопределяться в child-классах
		 }
		
	}

?>