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
		$newdate = $db->cleanInput($newdate)." ".date("H:i");
		$pcode = $db->cleanInput($pcode);
		$quantity = $db->cleanInput($quantity);
		$name = $db->cleanInput($name);
		$number = $db->cleanInput($number);
		$gcard = $db->cleanInput($gcard);
		$pin = $db->cleanInput($pin);
		if(isset($_SESSION["id"])){
		$user = $_SESSION['id'];
		$sprice=$db->get_data_here_value("SELECT PRICE FROM sproduct WHERE CODE=$pcode","PRICE");
		$amount=$quantity*$sprice;
		$comm=$quantity*25;
		$comm=(0.1*$comm);
                    $params = array($pcode, $quantity, $sprice, $amount, $comm, $name, $gcard, $number, $pin, $user, $newdate, $newdate, $_COOKIE['ccode'], $db->hcode());
                    $query = "INSERT INTO sales_tb (PCODE, QUANTITY, SPRICE, AMOUNT, SCOMM, CNAME, GCARD, CNUMBER, CPIN, POSTED_BY, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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