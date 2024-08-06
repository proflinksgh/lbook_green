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
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();

		$customer=$db->get_data_here_value("SELECT COUNT(ID) AS CUSTOMER FROM client_tb","CUSTOMER");
		$deposit=$this->user->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM deposit_tb","AMOUNT");
		$withdrawal=$this->user->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM withdrawal_tb","AMOUNT");
		$balance=$this->user->get_data_here_value("SELECT SUM(BALANCE) AS AMOUNT FROM balance_tb","AMOUNT");
		$activated=$this->user->get_data_here_value("SELECT NEXT_DATE FROM activation_tb", "NEXT_DATE");
		$days_left=$this->user->get_data_here_value("SELECT DAYS_LEFT FROM subscription_tb", "DAYS_LEFT");
		
		
        $company = rawurlencode("STEP BY STEP TELECOM");    
        $customer = rawurlencode($customer);                   
		$deposit = rawurlencode($deposit);
		$balance = rawurlencode($balance);                     

		$url = "https://linksengineering.net/apilinks/public/api/post_offline_record?company=".$company."&customer=".$customer."&deposit=".$deposit."&withdrawal=".$withdrawal."&balance=".$balance."&activated=".$activated."&days_left=".$days_left;

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