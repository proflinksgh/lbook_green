<?php
    //error_reporting(E_ALL);
  	require_once('config/config.php');
   	require_once (LIBS_DIR . "page_functions.php");
	require_once ''.APP_MODELS_DIR.'db_connect.php';
	require_once ''.APP_MODELS_DIR.'db_connect_server.php';
	require_once''.APP_CORE_DIR.'/app.php';

	define("BROWSER_TYPE","web");

	require_once''.APP_CORE_DIR.'/route.php';

	$temp_file = 'template_view_caller';

	require_once ''.APP_DIR.''.VIEWS_DIR.''.TEMPLATE_VIEWS_DIR.''.$temp_file.'.php';







