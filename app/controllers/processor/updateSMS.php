<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $surname, $contact;

    	function __construct()
    	{
    	    $this->user_tag = $this->model('master_class');
    
    		$this->user_initing = $this->model('extend_function');
    
    		$this->date_composer = $this->user_initing->timer;
    
    		$this->conn = new master_class();
    	}

    
        public function index()
    	{
    		$this->update();
    	}


	  function update()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$state = $db->cleanInput($state);
		$accountno = $db->cleanInput($accountno);
		$msg = array();

		$update_ = $db->updateFunction("UPDATE account_tb SET SMS_STATUS = '$state', DATE_CREATED = DATE_CREATED, DATE_MODIFIED = DATE_MODIFIED where ACCOUNT_NO = '$accountno' AND CCODE = ".$_COOKIE["ccode"]."");
		
		$contact_1 = $db->get_data_here_value("SELECT CONTACT_1 from client_tb ct JOIN account_tb atb ON ct.ID = atb.CLIENT_ID WHERE ACCOUNT_NO = '$accountno' AND CCODE = ".$_COOKIE["ccode"]."","CONTACT_1");
    			 if($state == '0'){
    		        $msg[] = array("result" => "active", "contact" =>$contact_1); 
    		        echo json_encode($msg);
    		    }else if($state == '1'){
    		        $msg[] = array("result" => "inactive", "contact" =>$contact_1); 
    		        echo json_encode($msg); 
    		    }
            
	    }
    }
?>