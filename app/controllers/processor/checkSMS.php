<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer, $status;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_contact();
	}
       function fetch_contact()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$accountno = $db->cleanInput($accountno);
		
		$result = $db->getAllData("SELECT SMS_STATUS from account_tb WHERE ACCOUNT_NO = '$accountno' AND CCODE = ".$_COOKIE["ccode"]."");
		if ($result !==0 ){
		foreach($result as $row)
        {

		if($row['SMS_STATUS'] == '0'){
        $result = $db->getAllData("SELECT CONTACT_1 from client_tb ct JOIN account_tb atb ON ct.ID = atb.CLIENT_ID WHERE ACCOUNT_NO = '$accountno' AND CCODE = ".$_COOKIE["ccode"]."");
		if ($result !==0){
		foreach($result as $row)
            {
    			echo $row['CONTACT_1'];
             }
			} 
         }
        }
	   }
	}
}
?>