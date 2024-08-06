<?php

if(isset($_GET['url']))
{
	$url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
	if(isset($url[1]) && $url[1]=='home')
	{
		//header("location:")
	}
}

	
	require_once 'app/init.php';

  
  //  echo SITE_ADDR;

$app = new App;

if(isset($_SERVER['HTTP_REFERER'])) 
{
   define('REFERER_DATA', $_SERVER['HTTP_REFERER']);
   
}
else
{
	define('REFERER_DATA', '');
	
}

