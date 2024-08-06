<?php

if(SYSTEM_STATUS__ON == 1) //Online Settigng
{
	define('PAGE_ADDR_HOLDER', '/');
	class route
	{
		public function model($model)
		{
			require_once ''.APP_DIR.'models/'.$model.'.php';
			return new $model();
		}

		public function view($view, $data, $page_parse)
		{
			require ''.APP_DIR.''.VIEWS_DIR.'index.php';
		}

		public function template($temp_file)
		{
			require ''.APP_DIR.''.VIEWS_DIR.''.TEMPLATE_VIEWS_DIR.''.$temp_file.'.php';
		}

		public function string_filter($string)
		{
			$url_exploder = explode('/',$_GET['url']);
		    $parsed_data = $url_exploder[1];
		   	$BadWords = array(",","'",":","+","&","...","(",")","?","%",".","!",'"',"{","}");
			$slug = str_replace($BadWords,"",$parsed_data);
		    return  $slug;
		}
	}
}
else // Offline Setting
{
	define('PAGE_ADDR_HOLDER', '/'.APP_URL);	

class route
{
	public function model($model)
	{
		require_once ''.APP_DIR.'models/'.$model.'.php';
		return new $model();
	}

	public function view($view, $data, $page_parse)
	{
		
		require ''.APP_DIR.''.VIEWS_DIR.'index.php';

		
	}


	public function template($temp_file)
	{
		require ''.APP_DIR.''.VIEWS_DIR.''.TEMPLATE_VIEWS_DIR.''.$temp_file.'.php';
	}
	public function string_filter($string)
	{
		 $url_exploder = explode('/',$_GET['url']);
	     $parsed_data = $url_exploder[1];
	   	 $BadWords = array(",","'",":","+","&","...","(",")","?","%",".","!",'"',"{","}");
		 $slug = str_replace($BadWords,"",$parsed_data);
	     return  $slug;
	}
}
}