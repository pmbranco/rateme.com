<?php
	class Subscriber extends Model
	{
	
		/*====================================== ПЕРЕМЕННЫЕ И КОНСТАНТЫ ======================================*/

		public static $mysql_table	= "subscribers";
		
		/*====================================== СИСТЕМНЫЕ ФУНКЦИИ ======================================*/
		
		/*
		 * Функция определяет соединение БД
		 */
		public static function dbConnection()
		{
			return dbUser();	// БД user_x
		}
		
		/*====================================== СТАТИЧЕСКИЕ ФУНКЦИИ ======================================*/
		
		
				
		/*====================================== ФУНКЦИИ КЛАССА ======================================*/

		
	}