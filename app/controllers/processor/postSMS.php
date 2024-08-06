<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $status = '', $fee;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
		public function index()
	{
        $this->post_sms();
	}

	function post_sms()
	    {
		    extract($_POST);
		    $db = $this->user_initing;
    		$message = $db->cleanInput($message);
    		$contact = $db->cleanInput($contact);
    		$accountno = $db->cleanInput($accountno);
    		
                $query = "INSERT INTO sms_tb (ACCOUNT_NO, MESSAGE, CONTACT) VALUES ('$accountno','$message', '$contact')";
    		   	$stmt = $this->conn->link->prepare($query);
    		   	$stmt->execute();
		   	 
        		 if($stmt){
        		   	     echo "success";
    		   	 }else{
    		   	     echo "failed";
    		   	 }
            }
    }
?>