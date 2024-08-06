<?php

class App
{
	protected $controller = CONTROLLER__NAME__PREFIX;
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parse_url();
		/*Get the name of controller called*/
		if(!empty($url[0]))
		{
			
			if(!empty($url[0]))
			{
				if(file_exists('app/controllers/'. $url[0].'/index.php'))
					{
						$this->controller = CONTROLLER__NAME__PREFIX;
						unset($url[1]);
						require_once 'app/controllers/'.$url[0].'/index.php';


						  $this->controller = new $this->controller;

					    call_user_func_array([$this->controller , $this->method], $this->params);
					}
					else
					{
						if(isset($url[0]) && isset($url[1]))
						{
							$folder_name = $url[0];
							$file_name = $url[1];

							if(file_exists('app/controllers/'. $folder_name.'/'.$url[1].'.php'))
							{	
								$this->controller = CONTROLLER__NAME__PREFIX;

								require_once 'app/controllers/'.$url[0].'/'.$url[1].'.php';

							    $this->controller = new $this->controller;
							    
							    call_user_func_array([$this->controller , $this->method], $this->params);
							}
							else
							{
								require('app/controllers/error_404.php');
							}
						}
						else
						{
							require('app/controllers/error_404.php');
						}
					}
			}
			else
			{
				require('app/controllers/error_404.php');
			}
		}
		else
		{
			require_once 'app/controllers/'.DEFAULT_CONT_LANDING_PAGE_DIR.'/index.php';
			$this->controller = new $this->controller;
			call_user_func_array([$this->controller , $this->method], $this->params);	
		}
	}
	
	
	
		public function __construct2()
	{
		$url = $this->parse_url();
		/*Get the name of controller called*/
		if(!empty($url[0]))
		{
			
			if(!empty($url[0]))
			{
				if(file_exists('app/controllers/'. $url[0].'/index.php'))
					{
						$this->controller = CONTROLLER__NAME__PREFIX;
						unset($url[1]);
						require_once 'app/controllers/'.$url[0].'/index.php';


						  $this->controller = new $this->controller;

					    call_user_func_array([$this->controller , $this->method], $this->params);
					}
					else
					{
						if(isset($url[0]) && isset($url[1]))
						{
							$folder_name = $url[0];
							$file_name = $url[1];

							if(file_exists('app/controllers/'. $folder_name.'/'.$url[1].'.php'))
							{	
								$this->controller = CONTROLLER__NAME__PREFIX;

								require_once 'app/controllers/'.$url[0].'/'.$url[1].'.php';

							    $this->controller = new $this->controller;
							    
							    call_user_func_array([$this->controller , $this->method], $this->params);
							}
							else
							{
								require('app/controllers/error_404.php');
							}
						}
						else
						{
							require('app/controllers/error_404.php');
						}
					}
			}
			else
			{
				require('app/controllers/error_404.php');
			}
		}
		else
		{
			require_once 'app/controllers/'.DEFAULT_CONT_LANDING_PAGE_DIR.'/index.php';
			$this->controller = new $this->controller;
			call_user_func_array([$this->controller , $this->method], $this->params);	
		}
	}

	public function parse_url()
	{
		if(isset($_GET['url']))
		{
			return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
		}
	}
}