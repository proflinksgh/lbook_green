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
		$agentid = $db->cleanInput($agentid);
		$category = $db->cleanInput($category);
		$fee = $db->cleanInput($fee);
		$payable = $db->cleanInput($payable);
		$pstatus = $db->cleanInput($pstatus);
		$amount = $db->cleanInput($amount);
		if(isset($_SESSION["id"])){
		$user = $_SESSION['id'];
		$comm=(0.0030*$amount);
                    $params = array($category, $agentid, $amount, $fee, $comm, $pstatus, $user, $date, $date, $_COOKIE['ccode'], $db->hcode());
                    $query = "INSERT INTO ecash_tb (CATEGORY, AGCUSTID, AMOUNT, FEE, COMMISSION, PAYMENT_STATUS, POSTED_BY, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
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