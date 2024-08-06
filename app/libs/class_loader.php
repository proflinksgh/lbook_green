<?php
 if(SYSTEM_STATUS__ON==1)
 {
 	
  $initiate_me_on_desktop = "/";
  define("ON_SERVER_INITIATOR", DIRECTORY_SEPARATOR.$initiate_me_on_desktop);
	
	require_once $_SERVER['DOCUMENT_ROOT'].$initiate_me_on_desktop."app/config/config.php";
	require_once $_SERVER['DOCUMENT_ROOT'].$initiate_me_on_desktop."app/models/db_connect_server.php" ;
	require_once $_SERVER['DOCUMENT_ROOT'].$initiate_me_on_desktop."app/models/db_connect.php" ;
	function class_loader($class) {
           include ''.$_SERVER['DOCUMENT_ROOT'].ON_SERVER_INITIATOR.'app/models/'.$class . '.php';
	}

	spl_autoload_register('class_loader');

 }
 else
 {
 	 $initiate_me_on_desktop = "/".APP_URL."/";
  define("ON_SERVER_INITIATOR", DIRECTORY_SEPARATOR.$initiate_me_on_desktop);
	
	require_once $_SERVER['DOCUMENT_ROOT'].$initiate_me_on_desktop."app/config/config.php";
	require_once $_SERVER['DOCUMENT_ROOT'].$initiate_me_on_desktop."app/models/db_connect_server.php" ;
	require_once $_SERVER['DOCUMENT_ROOT'].$initiate_me_on_desktop."app/models/db_connect.php" ;
	function class_loader($class) {
           include ''.$_SERVER['DOCUMENT_ROOT'].ON_SERVER_INITIATOR.'app/models/'.$class . '.php';
	}

	spl_autoload_register('class_loader');
 }
?>