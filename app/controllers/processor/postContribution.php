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
		$idSsnitEmployer = $db->cleanInput($idSsnitEmployer);
		$idSsnitEmployee = $db->cleanInput($idSsnitEmployee);
		$idWelfCont = $db->cleanInput($idWelfCont);
		$idBonusCont = $db->cleanInput($idBonusCont);
		$idDedCont = $db->cleanInput($idDedCont);
		
		$currDate = date('Y-m-d H:i:s');
		
                    $params = array($id, $idSsnitEmployer, $idSsnitEmployee, $idWelfCont, $idBonusCont, $idDedCont, $currDate);
                    $query = "INSERT INTO employee_cont_tb (STAFF_ID, SSNIT_EMPLOYER, SSNIT_EMPLOYEE, WELFARE, BONUS, DEDUCTION, DATE_CREATED) VALUES (?,?,?,?,?,?,?)";
                    $insert_contribution = $this->user->InsertRecords($query, $params);
                        
                    echo  $insert_contribution;
                            
	            }
            }
    ?>