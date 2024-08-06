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
		$newdate = $db->cleanInput($newdate);
		$date=$newdate." ".date("H:i");
		$amount = $db->cleanInput($amount);
		if(isset($_SESSION["id"])){
		$user = $_SESSION['id'];
		if($db->get_data_here_value("SELECT ID FROM mass_tb WHERE date(DATE_CREATED)='$newdate' AND POSTED_BY=$user","ID")>0){
		  echo json_encode(array("status"=>"exist"));  
		}else{
		$comm=(0.01*$amount);
                    $params = array($amount, $comm, $user, $date, $date);
                    $query = "INSERT INTO mass_tb (AMOUNT, COMMISSION, POSTED_BY, DATE_CREATED, DATE_MODIFIED) VALUES (?,?,?,?,?)";
                    $insert_ = $this->user->InsertRecords($query, $params);
                    if($insert_>0){
                     echo json_encode(array("status"=>"success"));        
                    }else{
                     echo json_encode(array("status"=>"failed"));   
                    }
		          }
		          }else{
		             echo json_encode(array("status"=>"expire"));    
		          }
	            }
            }
    ?>