<div class="sociallinks">
<ul>

	<?php
		// Если не своя страница --  то выводим кнопку «Подписаться»
		if (!$own_page) {
	?>
			<a class="sociallink" 
				
				ng-click="<?= User::loggedIn() ? "subscribe($id_user)" : "notLoggedIn()"?>" rel="me"  ng-mouseenter="show = true" ng-mouseleave="show = false">
			<svg ng-hide="subscribed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 11.809 11.807" style="enable-background:new 0 0 11.809 11.807;" xml:space="preserve" xmlns:xml="http://www.w3.org/XML/1998/namespace">
<path class="SocialIconFill" d="  M5.904,0.108c3.2,0,5.796,2.596,5.796,5.796c0,3.2-2.596,5.795-5.796,5.795S0.108,9.104,0.108,5.904  C0.108,2.704,2.704,0.108,5.904,0.108L5.904,0.108z M2.518,4.839v2.194h2.256V9.29h2.194V7.033h2.256V4.839H6.968V2.583H4.773v2.256  H2.518z"/></svg><svg ng-show="subscribed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="56px" height="56px" viewBox="45 15 126 115" xml:space="preserve" xmlns:xml="http://www.w3.org/XML/1998/namespace">
<path class="SocialIconFill" d="M162.18,41.592c-5.595-9.586-13.185-17.176-22.771-22.771c-9.588-5.595-20.055-8.392-31.408-8.392  c-11.352,0-21.822,2.797-31.408,8.392c-9.587,5.594-17.177,13.184-22.772,22.771C48.225,51.179,45.428,61.649,45.428,73  c0,11.352,2.798,21.82,8.392,31.408c5.595,9.585,13.185,17.176,22.772,22.771c9.587,5.595,20.056,8.392,31.408,8.392  c11.352,0,21.822-2.797,31.408-8.392c9.586-5.594,17.176-13.185,22.771-22.771c5.594-9.587,8.391-20.057,8.391-31.408  C170.57,61.648,167.773,51.178,162.18,41.592z M148.572,63.468l-44.239,44.239c-1.032,1.032-2.281,1.549-3.748,1.549  c-1.412,0-2.634-0.517-3.666-1.549L67.425,78.215c-0.977-0.979-1.466-2.199-1.466-3.666c0-1.521,0.488-2.771,1.466-3.749  l7.414-7.332c1.033-1.032,2.254-1.548,3.667-1.548s2.635,0.516,3.667,1.548l18.413,18.413l33.241-33.16  c1.032-1.032,2.254-1.548,3.666-1.548c1.411,0,2.635,0.516,3.666,1.548l7.414,7.333c0.979,0.977,1.467,2.226,1.467,3.747  C150.04,61.268,149.552,62.49,148.572,63.468z"/>
</svg></a>

	<?php
		} 
	?>
	
<!--
				<a class="sociallink EmailLink" href="#" onclick="bootbox.alert('<center>Функция в разработке и скоро будет доступна!</center>')"  ng-mouseenter="show = true" ng-mouseleave="show = false">
				<svg width="400px" height="400px" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<title>Email</title>
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<path class="SocialIconFill" d="M47.525,58.4312 C44.0017303,58.4312 40.8759923,60.0775002 38.8740909,62.6461034 L99.75,94.8175812 L163.968171,60.8797969 C162.084984,59.347607 159.678721,58.4312 157.05,58.4312 Z M36.8768341,66.781991 C36.6754591,67.614632 36.5688,68.4849911 36.5688,69.3812 L36.5688,129.6188 C36.5688,135.6864 41.4574,140.5688 47.525,140.5688 L157.05,140.5688 C163.1176,140.5688 168,135.6864 168,129.6188 L168,69.3812 C168,67.6380936 167.597054,65.9928022 166.878815,64.5329757 L99.7671275,100 L99.75,99.9564542 L99.7328725,100 Z M100,0 C155.2286,0 200,44.7714 200,100 C200,155.2286 155.2286,200 100,200 C44.7714,200 0,155.2286 0,100 C0,44.7714 44.7714,0 100,0 Z M173,61.2980665 L171.309648,57 Z M173,61.2980665" id="Email" fill="#444444"></path></g><image src="img/social/Email.png"></image></svg></a>
-->
				
				<a class="sociallink VKLink" href="https://vk.com/<?= $social["vk"] ?>" target="_blank" rel="me">
				<svg width="400px" height="400px" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<title>VK</title>
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<path class="SocialIconFill" d="M100,0 C155.2286,0 200,44.7714 200,100 C200,155.2286 155.2286,200 100,200 C44.7714,200 0,155.2286 0,100 C0,44.7714 44.7714,0 100,0 Z M98.4982462,139.599653 L106.866163,139.599653 C106.866163,139.599653 109.393201,139.321116 110.685313,137.930408 C111.872912,136.652592 111.834953,134.254716 111.834953,134.254716 C111.834953,134.254716 111.671282,123.026997 116.881634,121.373034 C122.02001,119.743228 128.616634,132.225099 135.608138,137.024302 C140.895395,140.655132 144.913218,139.860441 144.913218,139.860441 L163.609651,139.599653 C163.609651,139.599653 173.389475,138.995747 168.751971,131.306669 C168.372373,130.678607 166.050909,125.618616 154.850304,115.222561 C143.126643,104.34141 144.697784,106.101857 158.819814,87.2802068 C167.419434,75.8178271 170.857507,68.8204068 169.782801,65.8230618 C168.759365,62.9676963 162.433883,63.7219624 162.433883,63.7219624 L141.38345,63.8526033 C141.38345,63.8526033 139.821676,63.639634 138.664641,64.3322771 C137.533242,65.0091446 136.807076,66.5906385 136.807076,66.5906385 C136.807076,66.5906385 133.474009,75.4599204 129.032219,83.0040603 C119.658615,98.9205539 115.910454,99.7630642 114.377766,98.7731515 C110.812503,96.4694355 111.703819,89.5203278 111.703819,84.5821033 C111.703819,69.1566222 114.043523,62.725148 107.147657,61.0608328 C104.859717,60.5081973 103.174203,60.1428959 97.3219855,60.0837377 C89.8103825,60.0068322 83.454335,60.106415 79.8545631,61.8698201 C77.459645,63.0431229 75.6119395,65.6554471 76.7379159,65.8063004 C78.1296107,65.9916625 81.2797809,66.6566984 82.950012,68.9293564 C85.1078046,71.8650783 85.031885,78.4552935 85.031885,78.4552935 C85.031885,78.4552935 86.2717407,96.613387 82.1370807,98.8682975 C79.2999557,100.415282 75.407351,97.2572246 67.0502799,82.8162333 C62.7692036,75.4199887 59.536212,67.2423639 59.536212,67.2423639 C59.536212,67.2423639 58.9135728,65.7146053 57.800907,64.8967442 C56.4521018,63.9058456 54.5674225,63.5918146 54.5674225,63.5918146 L34.5631025,63.7224554 C34.5631025,63.7224554 31.5608277,63.8062628 30.4575286,65.1121784 C29.4759968,66.2746355 30.3791441,68.6764554 30.3791441,68.6764554 C30.3791441,68.6764554 46.0392858,105.31604 63.7724268,123.779784 C80.0354883,140.710839 98.4982462,139.599653 98.4982462,139.599653 Z M98.4982462,139.599653" id="VK" fill="#444444"></path></g><image src="img/social/VK.png">
				</image></svg></a>
			
								<a class="sociallink TwitterLink" href="https://twitter.com/<?= $social["twitter"] ?>" target="_blank" rel="me">
				<svg width="400px" height="400px" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<title>Twitter</title>
					<g fill-rule="evenodd">
					<path class="SocialIconFill" d="M100,0 C44.772,0 0,44.772 0,100 C0,155.228 44.772,200 100,200 C155.228,200 200,155.228 200,100 C200,44.772 155.228,0 100,0 L100,0 L100,0 Z M131.085844,49.1820697 C135.882815,50.1099098 141.754127,52.7769806 144.349825,55.2862809 L146.460943,57.2809493 L150.570486,56.2253903 C152.865669,55.6318732 156.377938,54.4335696 158.436466,53.5245117 C160.494994,52.6154537 162.373213,51.9430514 162.546009,52.1158475 C163.263489,52.8333271 159.112625,58.6745877 155.502689,61.9764964 L151.629801,65.5000349 L155.033134,65.0304802 C156.937648,64.7787989 160.247069,63.9786777 162.31311,63.268711 C164.551947,62.4986412 166.069548,62.2619857 166.069548,62.6827067 C166.069548,63.0696198 163.34613,66.0296927 160.081786,69.2564726 L154.21423,75.1240283 L153.744676,81.8142438 C152.294691,102.455869 144.781815,119.371108 130.852945,133.465262 C119.910442,144.53924 107.288811,151.270776 92.2330088,154.125669 C85.3925358,155.425396 72.9775093,155.85363 67.1099537,155.064778 C59.920132,154.099374 50.9873232,151.402252 43.6322182,147.905008 L37.0584523,144.734575 L43.9853234,144.26502 C52.2419734,143.746632 57.9404893,142.375532 64.529281,139.336574 C69.3976242,137.090224 75.832402,133.149721 75.3290393,132.646358 C75.1787818,132.496101 73.2855372,131.988982 71.1030469,131.590799 C63.2896566,130.159597 56.0021675,124.953174 52.3208586,117.973713 L50.5590893,114.57038 L55.9608467,114.217275 C61.3776298,113.879196 63.3309774,113.270653 61.0094989,112.571955 C53.9924733,110.46835 46.9341269,104.642115 43.7524242,98.3688646 C42.471479,95.840782 40.5819908,89.0153348 40.5819908,86.8666524 C40.5819908,86.7389335 41.2318546,87.0469614 41.990655,87.4526567 C43.4594221,88.2377522 52.1856268,90.1685611 52.5575141,89.8004302 C52.6777201,89.6802242 51.0436698,87.8658648 49.0339756,85.8110934 C47.0280379,83.756322 44.5675712,80.322938 43.5157687,78.1817685 C41.7878073,74.6544736 41.6413063,73.6402354 41.6375498,67.2655607 C41.6337934,61.852534 41.9230391,59.4709525 42.9297644,56.9353571 L44.221979,53.6484741 L46.9228576,56.6987015 C59.2477296,70.5186357 77.2523354,79.5265732 96.9285559,81.7015506 L100.684994,82.0546558 L100.452094,76.7731044 C100.189144,70.3383267 101.402473,65.7442034 104.678087,60.8082443 C109.681662,53.2578046 118.787267,48.5134238 127.445856,48.712515 C128.681724,48.7425665 129.880027,48.9491706 131.085844,49.1820697 Z M131.085844,49.1820697" id="Twitter"></path>
					</g>
					<image src="img/social/Twitter.png">
				</image></svg></a>		
								
				<a class="sociallink InstagramLink" href="http://instagram.com/<?= $social["instagram"] ?>" target="_blank" rel="me">
				<svg width="400px" height="400px" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<title>Instagram</title>
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<path class="SocialIconFill" d="M100,0 C44.7714,0 0,44.7714 0,100 C0,155.2286 44.7714,200 100,200 C155.2286,200 200,155.2286 200,100 C200,44.7714 155.2286,0 100,0 L100,0 L100,0 Z M52.55,32 L148.3188,32 C159.462,32 168.4376,40.0132 168.4376,49.9688 L168.4376,150.0312 C168.4376,159.9868 159.462,168 148.3188,168 L52.55,168 C41.4068,168 32.4376,159.987 32.4376,150.0312 L32.4376,49.9688 C32.4376,40.0132 41.4068,32 52.55,32 L52.55,32 L52.55,32 Z M135.4938,46.0812 C132.9892,46.0812 130.9688,48.0952 130.9688,50.6 L130.9688,65.0688 C130.9688,67.5734 132.9892,69.5876 135.4938,69.5876 L149.9626,69.5876 C152.4672,69.5876 154.4814,67.5736 154.4814,65.0688 L154.4814,50.6 C154.4814,48.0954 152.4674,46.0812 149.9626,46.0812 L135.4938,46.0812 L135.4938,46.0812 Z M123.2624,71.7 C123.3616,71.7708 123.4638,71.8408 123.5624,71.9124 L123.5624,71.7 L123.2624,71.7 L123.2624,71.7 Z M100,74.4 C83.4314,74.4 70,87.8314 70,104.4 C70,120.9686 83.4314,134.4 100,134.4 C116.5686,134.4 130,120.9686 130,104.4 C130,87.8314 116.5686,74.4 100,74.4 L100,74.4 L100,74.4 Z M40,85.6624 L40,148 C40,154.648 45.352,160 52,160 L148,160 C154.648,160 160,154.648 160,148 L160,86.9312 L136.0812,86.9312 C138.5902,92.1542 140,98.0056 140,104.1876 C140,126.2276 122.1338,144.0938 100.0938,144.0938 C78.0538,144.0938 60.1876,126.2276 60.1876,104.1876 C60.1876,97.5002 61.8368,91.199 64.7438,85.6626 L40,85.6626 L40,85.6624 L40,85.6624 Z M40,85.6624" id="Instagram" fill="#444444"></path>
					</g>
					<image src="img/social/Instagram.png">
				</image></svg>
				</a>
				
				
	<?php
		// Если своя страница --  то выводим кнопку «Настройки» (редактировать профиль)
		if ($own_page) {
	?>
		<a class="sociallink" href="index.php?controller=profile&action=edit" rel="me"  ng-mouseenter="show = true" ng-mouseleave="show = false">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" > <path class="SocialIconFill" d="M 24.00,0.00C 10.746,0.00,0.00,10.746,0.00,24.00s 10.746,24.00, 24.00,24.00s 24.00-10.746, 24.00-24.00S 37.254,0.00, 24.00,0.00z M 39.00,27.00l-3.426,0.00 c-0.282,1.089-0.714,2.112-1.272,3.063l 2.427,2.424c 1.17,1.173, 1.17,3.072,0.00,4.245c-1.173,1.17-3.072,1.17-4.245,0.00l-2.424-2.427 C 29.112,34.86, 28.089,35.295, 27.00,35.574L27.00,39.00 c0.00,1.659-1.341,3.00-3.00,3.00s-3.00-1.341-3.00-3.00l0.00,-3.426 c-1.089-0.282-2.112-0.714-3.063-1.272 l-2.424,2.427c-1.173,1.17-3.072,1.17-4.242,0.00c-1.173-1.173-1.173-3.072,0.00-4.245l 2.424-2.424C 13.14,29.112, 12.705,28.089, 12.426,27.00L9.00,27.00 C 7.341,27.00, 6.00,25.659, 6.00,24.00s 1.341-3.00, 3.00-3.00l3.426,0.00 C 12.705,19.911, 13.14,18.888, 13.695,17.937L 11.274,15.516c-1.173-1.173-1.173-3.072,0.00-4.242 c 1.17-1.173, 3.069-1.173, 4.242,0.00l 2.424,2.424C 18.888,13.14, 19.911,12.705, 21.00,12.426L21.00,9.00 c0.00-1.659, 1.341-3.00, 3.00-3.00s 3.00,1.341, 3.00,3.00l0.00,3.426 c 1.089,0.282, 2.112,0.714, 3.063,1.272l 2.424-2.424c 1.173-1.173, 3.072-1.173, 4.245,0.00c 1.17,1.17, 1.17,3.069,0.00,4.242l-2.427,2.424 C 34.86,18.888, 35.295,19.911, 35.574,21.00L39.00,21.00 c 1.659,0.00, 3.00,1.341, 3.00,3.00S 40.659,27.00, 39.00,27.00z M 24.00,18.00C 20.688,18.00, 18.00,20.688, 18.00,24.00s 2.688,6.00, 6.00,6.00s 6.00-2.688, 6.00-6.00 S 27.312,18.00, 24.00,18.00z"/></svg>
		</a>	
	<?php
		}
	?>		
								
				</ul>
</div>

	<?php
		// Если не своя страница --  то выводим кнопку «Подписаться»
		if (!$own_page) {
	?>
			<h3 ng-show="show" class="chat center-content text-white animate-show-hide" ng-class="{'badge-primary' : !subscribed, 'badge-success' : subscribed}">
				<span ng-hide="subscribed" class="animate-show"><span class="glyphicon glyphicon-user"></span> Подписаться</span>
				<span ng-show="subscribed" class="animate-show"><span class="glyphicon glyphicon-ok"></span> Подписка оформлена</span>
			</h3>
	<?php
		} else {
	?>
			<h3 ng-show="show" class="chat center-content text-white badge-primary animate-show-hide"><span class="glyphicon glyphicon-cog"></span> Настройки</h3>
	<?php
		}
	?>	