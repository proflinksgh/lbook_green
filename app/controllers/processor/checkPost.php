<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
		$this->user = new extend_function();
	}
	
	public function index()
	{
	    $this->fetch_search();
	}
       function fetch_search()
		{		
		
        $company = rawurlencode("STEP BY STEP TELECOM");    
                    
		$url = "https://linksengineering.net/apilinks/public/api/check_record_exist?company=".$company;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$data = json_decode($html_curl, TRUE);

        echo $data;

	}
}
?>