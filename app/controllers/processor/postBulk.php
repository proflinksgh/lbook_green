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
		$customer = $db->cleanInput($customer);
		$amount = $db->cleanInput($amount);
		$evdno = $db->cleanInput($evdno);
		$paidin = $db->cleanInput($paidin);
		$fee=$db->cleanInput($fee);
		$procby=$db->cleanInput($procby);

		if(isset($_SESSION["id"])){
		$user = $_SESSION['id'];
                    $params = array($customer, $evdno, $category, $amount, $fee, $paidin, $procby, $user, $date, $date);
                    $query = "INSERT INTO btransfer_tb (CUSTOMER, EVDNUMBER, CUSTCAT, AMOUNT, FEE, PAIDIN, PROC_BY, POSTED_BY, DATE_CREATED, DATE_MODIFIED) VALUES (?,?,?,?,?,?,?,?,?,?)";
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