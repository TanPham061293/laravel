<?php
	// if(!defined('LIBRARIES')) die("Error");
	// /* Root */
	// define('ROOT',__DIR__);
	// /* Timezone */
	// date_default_timezone_set('Asia/Ho_Chi_Minh');
	// /* Cấu hình coder */
	// define('BMWEB_MSHD','');
	// define('BMWEB_AUTHOR','');
	/* Cấu hình chung */
	$config = array(
		'author' => array(
			'name' => '',
			'email' => '',
			'timefinish' => '11/2020'
		),
		'arrayDomainSSL' => array(),
		// 'database' => array(
		// 	'server-name' => $_SERVER["SERVER_NAME"],
		// 	'url' => '/caphemocnauedit/',
		// 	'type' => 'mysql',
		// 	'host' => 'localhost',
		// 	'username' => 'root',
		// 	'password' => '',
		// 	'dbname' => 'newdata',
		// 	'port' => 3306,
		// 	'prefix' => 'table_',
		// 	'charset' => 'utf8'
		// ),
		'website' => array(
			'error-reporting' => true,
			'secret' => '$bmweb@',
			'salt' => 'L,PP.~qmLW',
			'debug-developer' => false,
			'debug-css' => true,
			'debug-js' => true,
			'reponsive' => true,
			'mobile' => true,
			'cart' => true,
			'popup' => false,
			'index' => false,
			'upload' => array(
				'max-width' => 1600,
				'max-height' => 1600
			),
			'lang' => array(
				'vi'=>'Tiếng Việt'
			),
			'lang-doc' => 'vi',
			'slug' => array(
				'vi'=>'Tiếng Việt'
			),
			'seo' => array(
				'vi'=>'Tiếng Việt'
			),
			'comlang' => array(
				"gioi-thieu" => array("vi"=>"gioi-thieu","en"=>"about-us"),
				"san-pham" => array("vi"=>"san-pham","en"=>"product"),
				"tin-tuc" => array("vi"=>"tin-tuc","en"=>"news"),
				"tuyen-dung" => array("vi"=>"tuyen-dung","en"=>"recruitment"),
				"thu-vien-anh" => array("vi"=>"thu-vien-anh","en"=>"gallery"),
				"video" => array("vi"=>"video","en"=>"video"),
				"lien-he" => array("vi"=>"lien-he","en"=>"contact")
			)
		),
		'order' => array(
			'ship' => true,
			'size' => false,
			'color' => false,
			'discount' => false,
		),
		// 'login' => array(
		// 	'admin' => 'LoginAdmin'.BMWEB_MSHD,
		// 	'member' => 'LoginMember'.BMWEB_MSHD,
		// 	'attempt' => 5,
		// 	'delay' => 15
		// ),
		'googleAPI' => array(
			'recaptcha' => array(
				'active' => false,
				'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
				'sitekey' => '6LezS5kUAAAAAF2A6ICaSvm7R5M-BUAcVOgJT_31',
				'secretkey' => '6LezS5kUAAAAAGCGtfV7C1DyiqlPFFuxvacuJfdq'
			)
		),
		'oneSignal' => array(
			'active' => false,
			'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
			'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
		),
		'license' => array(
			'version' => "7.0.0",
			'powered' => ""
		)
	);
	/* Error reporting */
	// error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);
	//pass: UB6POI5
	/* Cấu hình base */

	// if($config['arrayDomainSSL']) require_once LIBRARIES."checkSSL.php";
	// $http = 'http';
 //    if(!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") $http .= "s";
 //    $http .= "://";
    
	// $http = 'http://';
	// $config_url = $config['database']['server-name'].$config['database']['url'];
	// $config_base = $http.$config_url;
	/* Cấu hình login */
	// $login_admin = $config['login']['admin'];
	// $login_member = $config['login']['member'];
	/* Cấu hình upload */
	// require_once LIBRARIES."constant.php";
?>