<?php

	/*START SESSION*/
	session_start();

	
	/*
	Please dont edit this section
	*/
	define('ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/');


	$path=$_SERVER['PHP_SELF'];


	$path=substr($path, 0, strpos($path, 'index.php'));


	define('ROOT_URL', $path);

	/*

	---------CHANGE THIS TO 1 WHEN LAUNCHED ON A PUBLIC FOLDER ON LIVE SERVER

									OR

	---------CHANGE THIS TO 0 WHEN LAUNCHED ON A PUBLIC FOLDER ON LIVE SERVER AS A SUB DOMAIN


	*/
	define('SYSTEM_STATUS__ON', 0);




	define('SITE_NAME',"L-Book v2.0");



	/*APP DIR */
	define('APP_URL','/lbook_green/');



	/*DEFAULT LANDING PAGE CONTROLLER NAME */
	define('DEFAULT_CONT_LANDING_PAGE_DIR','home');


	/*DEFAULT LANDING PAGE VIEW NAME */
	define('DEFAULT_VIEW_LANDING_PAGE_DIR','home');




	define('CONTROLLER__NAME__PREFIX','amwork_controller');




	if(SYSTEM_STATUS__ON==1)
	{
		define('SITE_ADDR','/');

		define('SITE_ADDR_ON_LOCAL','/');

		define('IMG_DIR',''.SITE_ADDR."assets/images/");
	}
	else
	{
		define('SITE_ADDR','/'.APP_URL.'/');

	    define('SITE_ADDR_ON_LOCAL',''.APP_URL.'/');

	    define('IMG_DIR',  ''.SITE_ADDR."assets/images/");
	}




	/*APP FOLDER DIRECTORY*/



	define('SITE_LOGO_SRC',IMG_DIR . "logo.png");

	define('SITE_FAVICON',IMG_DIR . "favicon.png");

	define('LANDING_PAGE_DIR', SITE_ADDR);
	
	define('CSS_DIR',ROOT_URL. "assets/css/");

	define('CSS_DIR_DIRECT',ROOT_URL. "assets/");

	define('APP_ACCESSS',ROOT_URL. "assets/");

	/*JAVASCRIPT DIRECTORY*/

	define('JS_DIR',ROOT_URL . "assets/js/");

	define('JS_DIR_DIRECT',ROOT_URL . "assets/");

	
	

	/*PLEASE DONT EDIT OR ALTER*/


	define('APP_DIR',"app/");

	define('APP_DIR_EXT',SITE_ADDR."app/");

	define('APP_DIR_EXT_SEARCH',$_SERVER['DOCUMENT_ROOT'].SITE_ADDR_ON_LOCAL."app/");
	
	define('APP_LAYOUT_DIR',APP_DIR . "Layout/");

	define('APP_MODELS_DIR',APP_DIR . "models/");


	define('TEMPLATE_VIEWS_DIR', 'template/');



	define('APP_CORE_DIR', 'core/');

	define('LIBS_DIR', 'libs/');

	define('VIEWS_DIR', 'views/');




	/*RE-ROUTING DIECTORIES*/

	define('SPECIFIC_ACTIVE_PAGE_DIR', SITE_ADDR.'app/'.VIEWS_DIR);

	define('SPECIFIC_ACTIVE_PAGE_CONTROLLER', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.SITE_ADDR_ON_LOCAL.'app/controllers/');

	define('SPECIFIC_ACTIVE_PAGE_DIR_NEW', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.SITE_ADDR_ON_LOCAL.'app/'.VIEWS_DIR);

	define('SPECIFIC_ACTIVE_PAGE_DIR_NEW_TEMP', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.SITE_ADDR_ON_LOCAL.'app/'.VIEWS_DIR.'template/');




	/*APP FILES DIRECTORY*/
	define('UPLOAD_DIR',APP_DIR . "AppFiles/");


	/*HTML META TAGS DEFINITION & FAVICON DIR*/

	define('META_AUTHOR','');

	define('META_DESCRIPTION','');

	define('META_KEYWORDS','');

	define('META_VIEWPORT','width=device-width, initial-scale=1.0');

	define('FAVICON_DIR',IMG_DIR. 'assets/images/logo/');



	/*DIR TO TEMPLATE FOLDER*/

	define('TEMPLATE_MODELS_DIR',APP_DIR . "views/template/");
	/*




	-----ERROR LOGGING SCRIPT-----------

	*/
	error_reporting(E_ALL); // Error engine

	ini_set('display_errors', TRUE); // Error display

	ini_set('log_errors', TRUE); // Error logging

	ini_set('error_log', 'errors.log'); // Logging file

	ini_set('log_errors_max_len', 3000024); // Logging file size

