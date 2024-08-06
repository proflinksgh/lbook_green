<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $min_amount, $max_amount;

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
        $this->calcMomo();
	}

	function calcMomo()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$date = $db->cleanInput($date)." ".date("H:i");
		$type = $db->cleanInput($type);
		$amount = $db->cleanInput($amount);
		$excess = $db->cleanInput($excess);
		$remark = $db->cleanInput($remark);
		$check = $db->cleanInput($check);
		$ttype = $db->cleanInput($ttype);
		if(isset($_SESSION["id"])){
		$user = $_SESSION['id'];
                    
                    if($_SESSION["status"]==="1"){
                     $params = array($ttype, $type, $amount, $excess, $remark, 0, $user, $check, $date, $date);
                    }else{
                     $params = array($ttype, $type, $amount, $excess, $remark, 1, $user, $check, $date, $date);
                    }
                    
                    $query = "INSERT INTO excess_tb (ttype, type, oamount, amount, remarks, status, posted_by, checked_by, date_created, date_modified) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $insert_ = $this->user->InsertRecords($query, $params);
                    if($insert_>0){
                     echo json_encode(array("status"=>"success"));        
                    }else{
                     echo json_encode(array("status"=>"failed"));   
                    }
		          }else{
		             echo json_encode(array("status"=>"expire"));    
		          }
	            }
            }
    ?>