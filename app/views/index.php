<?php
  
//   error_reporting(0);
   
   $dblink = $data['initiator'];

   $active_page =$page_parse.'/'.$view.'.php';

   if(isset($_GET['url']))
	{
	$url_target = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
	}

	$site_title = 'L-BOOK v2.0';
	require_once 'template/header.php';  
	if($page_parse == 'contact'||$page_parse == 'about'||$page_parse == 'home'||$page_parse == "onboard"||$page_parse == "pricing"){
		require_once 'template/topnav.php';
	}

	if ($page_parse != 'contact'&&$page_parse != 'about'&&$page_parse != 'home'&&$page_parse != 'onboard'&&$page_parse != 'pricing'&&$page_parse != 'activation'&&$page_parse != 'code-verification'&&$page_parse != 'reauth'&&$page_parse != 'reset-passwd'&&$page_parse != 'close-session'&&$page_parse != 'session-begin'&&$page_parse != 'auth'&& $page_parse != 'signup'){
		if($_SESSION["status"]=="7"){
		  require_once 'template/sidebar2.php';  
		}else{
		  require_once 'template/sidebar.php';  
		}
	}

	require_once ''.$active_page.''; 
	require_once 'template/footer.php';
?>	
