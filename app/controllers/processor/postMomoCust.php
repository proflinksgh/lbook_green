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
		$fullname = $db->cleanInput($fullname);
		$phone = $db->cleanInput($phone);
		$city = $db->cleanInput($city);
		$category = $db->cleanInput($category);
		$agentno = $db->cleanInput($agentno);
		$agentname = $db->cleanInput($agentname);
		$tcust = $db->cleanInput($tcust); 
		$currDate = date("Y-m-d H:i");
		if(isset($_SESSION["id"])){
		$user = $_SESSION['id'];
                    $params = array($fullname, $phone, $city, $category, $agentname, $agentno, $tcust, $user, $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
                    $query = "INSERT INTO mcustomer_tb (FULLNAME, PHONE, CITY, CATEGORY, AGENT_NAME, AGENTID, AGENTCUST, POSTED_BY, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
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