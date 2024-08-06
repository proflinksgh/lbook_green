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
        $this->contribution();
	}

	function contribution()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$type = $db->cleanInput($type);
		$amount = $db->cleanInput($amount);
		$distribution = $db->cleanInput($distribution);
		$currDate = date('Y-m-d H:i:s');

                    $params = array($id, $type, $amount, $distribution, $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
                    $query = "INSERT INTO employee_deduction_tb (STAFF_ID, TYPE, AMOUNT, DISTRIBUTION, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?)";
                    $insert_contribution = $this->user->InsertRecords($query, $params);
                  
                    echo  $insert_contribution;          
	            }
            }
    ?>