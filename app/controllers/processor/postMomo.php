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
		$momoDate = $db->cleanInput($momoDate);
		$momoDeposit = $db->cleanInput($momoDeposit);
		$momoCashout = $db->cleanInput($momoCashout);
		$user = $_SESSION['id'];
		
		$depComm = 0.2 * $momoDeposit;
		$cashoutComm = 0.1 * $momoCashout;
		
                    $params = array($momoDeposit, $depComm, $momoCashout, $cashoutComm, $user, $momoDate, $momoDate, $_COOKIE['ccode'], $db->hcode());
                    $query = "INSERT INTO momo_trans_tb (DEPOSIT, DEPOSIT_COMM, CASHOUT, CASHOUT_COMM, POSTED_BY, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?)";
                    $insert_interest = $this->user->InsertRecords($query, $params);
                        
                    echo  $insert_interest;
                            
	            }
            }
    ?>