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
		$pass = $db->cleanInput($pass);
		$user = $db->cleanInput($user);
		$pass = $db->password($pass);
		
		$update_ = $db->updateFunction("UPDATE admin_tb SET PASSWORD = '$pass' where USERNAME = '$user'");
    		if($update_=="0"){
    	         echo 'success'; 
    		}else{
    		    echo 'failed'; 
    		}
    
	    }
    }
?>