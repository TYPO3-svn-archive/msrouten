<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "msrouten".
 *
 * Auto generated 11-03-2013 18:49
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MS Routen',
	'description' => 'Bergrouten',
	'category' => 'plugin',
	'author' => 'Sebastian B., Berti Golf',
	'author_email' => 'info@buzted.de, info@berti-golf.de',
	'author_company' => 'buzted.de, www.berti-golf.de',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => 'flexform',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.9.4',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
			'dompdf' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:122:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"2476";s:14:"ext_tables.php";s:4:"809a";s:14:"ext_tables.sql";s:4:"67b6";s:24:"ext_typoscript_setup.txt";s:4:"9e33";s:21:"ExtensionBuilder.json";s:4:"c023";s:38:"Classes/Controller/GuideController.php";s:4:"ca8b";s:39:"Classes/Controller/MountsController.php";s:4:"43a1";s:41:"Classes/Controller/PicturesController.php";s:4:"963b";s:39:"Classes/Controller/RoutesController.php";s:4:"8e61";s:38:"Classes/Controller/WallsController.php";s:4:"61ad";s:32:"Classes/Domain/Model/Gebirge.php";s:4:"02db";s:30:"Classes/Domain/Model/Guide.php";s:4:"7416";s:31:"Classes/Domain/Model/Karten.php";s:4:"cea2";s:31:"Classes/Domain/Model/Mounts.php";s:4:"746e";s:33:"Classes/Domain/Model/Pictures.php";s:4:"0ab7";s:31:"Classes/Domain/Model/Routes.php";s:4:"1fda";s:30:"Classes/Domain/Model/Walls.php";s:4:"67ae";s:45:"Classes/Domain/Repository/GuideRepository.php";s:4:"5962";s:46:"Classes/Domain/Repository/MountsRepository.php";s:4:"dd31";s:48:"Classes/Domain/Repository/PicturesRepository.php";s:4:"fe5d";s:46:"Classes/Domain/Repository/RoutesRepository.php";s:4:"c20e";s:45:"Classes/Domain/Repository/WallsRepository.php";s:4:"77bf";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"dd64";s:29:"Configuration/TCA/Gebirge.php";s:4:"3290";s:27:"Configuration/TCA/Guide.php";s:4:"a0fd";s:28:"Configuration/TCA/Karten.php";s:4:"1688";s:28:"Configuration/TCA/Mounts.php";s:4:"0ed9";s:30:"Configuration/TCA/Pictures.php";s:4:"ac78";s:28:"Configuration/TCA/Routes.php";s:4:"63c4";s:27:"Configuration/TCA/Walls.php";s:4:"fa4d";s:38:"Configuration/TypoScript/constants.txt";s:4:"122f";s:34:"Configuration/TypoScript/setup.txt";s:4:"5107";s:40:"Resources/Private/Language/locallang.xml";s:4:"d593";s:52:"Resources/Private/Language/locallang_csh_tt_news.xml";s:4:"bf04";s:77:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_gebirge.xml";s:4:"856c";s:75:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_guide.xml";s:4:"7f39";s:76:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_karten.xml";s:4:"fc33";s:76:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_mounts.xml";s:4:"755e";s:78:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_pictures.xml";s:4:"fe46";s:76:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_routes.xml";s:4:"5b3c";s:75:"Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_walls.xml";s:4:"dd65";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"6c94";s:38:"Resources/Private/Layouts/Default.html";s:4:"8f3d";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:49:"Resources/Private/Partials/Beauty/FormFields.html";s:4:"ae81";s:49:"Resources/Private/Partials/Beauty/Properties.html";s:4:"2c10";s:50:"Resources/Private/Partials/Climber/FormFields.html";s:4:"1778";s:50:"Resources/Private/Partials/Climber/Properties.html";s:4:"9ced";s:47:"Resources/Private/Partials/Gear/FormFields.html";s:4:"ac32";s:47:"Resources/Private/Partials/Gear/Properties.html";s:4:"7136";s:48:"Resources/Private/Partials/Guide/FormFields.html";s:4:"3441";s:48:"Resources/Private/Partials/Guide/Properties.html";s:4:"15f5";s:49:"Resources/Private/Partials/Mounts/FormFields.html";s:4:"ec44";s:49:"Resources/Private/Partials/Mounts/Properties.html";s:4:"e66c";s:51:"Resources/Private/Partials/Pictures/FormFields.html";s:4:"07c7";s:51:"Resources/Private/Partials/Pictures/Properties.html";s:4:"29b4";s:49:"Resources/Private/Partials/Routes/FormFields.html";s:4:"eea2";s:49:"Resources/Private/Partials/Routes/Properties.html";s:4:"166f";s:48:"Resources/Private/Partials/Walls/FormFields.html";s:4:"c437";s:48:"Resources/Private/Partials/Walls/Properties.html";s:4:"4456";s:44:"Resources/Private/Templates/Beauty/Edit.html";s:4:"9950";s:44:"Resources/Private/Templates/Beauty/List.html";s:4:"dac1";s:43:"Resources/Private/Templates/Beauty/New.html";s:4:"d4ca";s:44:"Resources/Private/Templates/Beauty/Show.html";s:4:"ef93";s:45:"Resources/Private/Templates/Climber/Edit.html";s:4:"98dc";s:45:"Resources/Private/Templates/Climber/List.html";s:4:"4073";s:44:"Resources/Private/Templates/Climber/New.html";s:4:"b9fc";s:45:"Resources/Private/Templates/Climber/Show.html";s:4:"517d";s:42:"Resources/Private/Templates/Gear/Edit.html";s:4:"f312";s:42:"Resources/Private/Templates/Gear/List.html";s:4:"6d3b";s:41:"Resources/Private/Templates/Gear/New.html";s:4:"9697";s:42:"Resources/Private/Templates/Gear/Show.html";s:4:"2347";s:43:"Resources/Private/Templates/Guide/Edit.html";s:4:"9f85";s:43:"Resources/Private/Templates/Guide/List.html";s:4:"9e94";s:42:"Resources/Private/Templates/Guide/New.html";s:4:"2af1";s:43:"Resources/Private/Templates/Guide/Show.html";s:4:"c57e";s:44:"Resources/Private/Templates/Mounts/Edit.html";s:4:"b017";s:44:"Resources/Private/Templates/Mounts/List.html";s:4:"6c2d";s:43:"Resources/Private/Templates/Mounts/New.html";s:4:"b3d3";s:44:"Resources/Private/Templates/Mounts/Show.html";s:4:"3d8a";s:46:"Resources/Private/Templates/Pictures/Edit.html";s:4:"13fd";s:46:"Resources/Private/Templates/Pictures/List.html";s:4:"3519";s:45:"Resources/Private/Templates/Pictures/New.html";s:4:"044f";s:46:"Resources/Private/Templates/Pictures/Show.html";s:4:"4a10";s:44:"Resources/Private/Templates/Routes/Edit.html";s:4:"710d";s:44:"Resources/Private/Templates/Routes/List.html";s:4:"ffb2";s:47:"Resources/Private/Templates/Routes/List_01.html";s:4:"25b5";s:43:"Resources/Private/Templates/Routes/New.html";s:4:"b73b";s:44:"Resources/Private/Templates/Routes/Show.html";s:4:"ae77";s:43:"Resources/Private/Templates/Walls/Edit.html";s:4:"87e7";s:43:"Resources/Private/Templates/Walls/List.html";s:4:"18e7";s:42:"Resources/Private/Templates/Walls/New.html";s:4:"56f0";s:43:"Resources/Private/Templates/Walls/Show.html";s:4:"7432";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:34:"Resources/Public/Icons/tt_news.gif";s:4:"905a";s:59:"Resources/Public/Icons/tx_msrouten_domain_model_gebirge.gif";s:4:"1103";s:57:"Resources/Public/Icons/tx_msrouten_domain_model_guide.gif";s:4:"905a";s:58:"Resources/Public/Icons/tx_msrouten_domain_model_karten.gif";s:4:"1103";s:58:"Resources/Public/Icons/tx_msrouten_domain_model_mounts.gif";s:4:"905a";s:60:"Resources/Public/Icons/tx_msrouten_domain_model_pictures.gif";s:4:"905a";s:58:"Resources/Public/Icons/tx_msrouten_domain_model_routes.gif";s:4:"905a";s:57:"Resources/Public/Icons/tx_msrouten_domain_model_walls.gif";s:4:"905a";s:46:"Tests/Unit/Controller/BeautyControllerTest.php";s:4:"ec24";s:47:"Tests/Unit/Controller/ClimberControllerTest.php";s:4:"0479";s:44:"Tests/Unit/Controller/GearControllerTest.php";s:4:"5291";s:45:"Tests/Unit/Controller/GuideControllerTest.php";s:4:"e043";s:46:"Tests/Unit/Controller/MountsControllerTest.php";s:4:"b94f";s:48:"Tests/Unit/Controller/PicturesControllerTest.php";s:4:"239b";s:46:"Tests/Unit/Controller/RoutesControllerTest.php";s:4:"0d4c";s:45:"Tests/Unit/Controller/WallsControllerTest.php";s:4:"7328";s:38:"Tests/Unit/Domain/Model/BeautyTest.php";s:4:"ca92";s:39:"Tests/Unit/Domain/Model/ClimberTest.php";s:4:"a529";s:36:"Tests/Unit/Domain/Model/GearTest.php";s:4:"7641";s:39:"Tests/Unit/Domain/Model/GebirgeTest.php";s:4:"9744";s:37:"Tests/Unit/Domain/Model/GuideTest.php";s:4:"35cc";s:38:"Tests/Unit/Domain/Model/KartenTest.php";s:4:"13ed";s:38:"Tests/Unit/Domain/Model/MountsTest.php";s:4:"eecd";s:40:"Tests/Unit/Domain/Model/PicturesTest.php";s:4:"c5dd";s:38:"Tests/Unit/Domain/Model/RoutesTest.php";s:4:"7467";s:37:"Tests/Unit/Domain/Model/WallsTest.php";s:4:"e713";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>