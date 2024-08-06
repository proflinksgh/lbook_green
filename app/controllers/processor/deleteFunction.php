<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $ids = array();
	
	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
        $this->delete();
	}
    function delete()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$table = $db->cleanInput($table);
		$currDate = date('Y-m-d H:i:s');
		$countno = substr_count($id, ",");
		if($countno>0){
		  $getid = explode(",", $id);
		  for($i=0;$i<$countno;$i++){
		  	$code = $getid[$i];
		  	if($table === "deposit_tb"||$table === "momo_trans_tb"){
			 $gethash = $db->get_data_here_value("SELECT HCODE FROM $table WHERE ID = $code AND CCODE = ".$_COOKIE["ccode"]."","HCODE");
			 $params = array($_COOKIE['ccode'], $gethash, $table, $currDate);
			 $query = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
             $insert_payment = $db->InsertRecords($query, $params);
			}else if($table === "withdrawal_tb"){
             $gethash = $db->get_data_here_value("SELECT HCODE FROM $table WHERE CODE = $code AND CCODE = ".$_COOKIE["ccode"]."","HCODE");
             $gethash_charge = $db->get_data_here_value("SELECT HCODE FROM charge_tb WHERE WITHDRAWAL_ID = $code AND CCODE = ".$_COOKIE["ccode"]."","HCODE");

			$params = array($_COOKIE['ccode'], $gethash_charge, 'charge_tb', $currDate);
			$query = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
            $insert_payment = $db->InsertRecords($query, $params);
			}
		  
		  }
		}else{
			
			if($table === "deposit_tb"){
			 $gethash = $db->get_data_here_value("SELECT HCODE FROM $table WHERE ID = $id AND CCODE = ".$_COOKIE["ccode"]."","HCODE");
			$params = array($_COOKIE['ccode'], $gethash, $table, $currDate);
			$query = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
            $insert_payment = $db->InsertRecords($query, $params);
			}else if($table === "withdrawal_tb"){
             $gethash = $db->get_data_here_value("SELECT HCODE FROM $table WHERE CODE = $id AND CCODE = ".$_COOKIE["ccode"]."","HCODE");
             $gethash_charge = $db->get_data_here_value("SELECT HCODE FROM charge_tb WHERE WITHDRAWAL_ID = $id AND CCODE = ".$_COOKIE["ccode"]."","HCODE");

            $params = array($_COOKIE['ccode'], $gethash_charge, 'charge_tb', $currDate);
			$query = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
            $insert_payment = $db->InsertRecords($query, $params);
			}else if($table === "admin_tb"){
			 $gethash = $db->get_data_here_value("SELECT HCODE FROM $table WHERE CODE = $id AND CCODE = ".$_COOKIE["ccode"]."","HCODE");
			$params = array($_COOKIE['ccode'], $gethash, $table, $currDate);
			$query = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
            $insert_payment = $db->InsertRecords($query, $params);
			}
		}

		if($table == "deposit_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id) AND CCODE = ".$_COOKIE["ccode"]."";
		}else if($table === "withdrawal_tb"){
		 $query2 = "DELETE FROM $table WHERE CODE IN ($id) AND CCODE = ".$_COOKIE["ccode"]."";
		 $query = $db->deleRecord("DELETE FROM charge_tb WHERE WITHDRAWAL_ID IN ($id) AND CCODE = ".$_COOKIE["ccode"]."");
		}else if($table == "admin_tb"){
		 $query2 = "DELETE FROM $table WHERE CODE IN ($id) AND CCODE = ".$_COOKIE["ccode"]."";
		}else if($table == "momo_trans_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id) AND CCODE = ".$_COOKIE["ccode"]."";
		}else if($table == "sales_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id) AND CCODE = ".$_COOKIE["ccode"]."";
		}else if($table == "evd_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id)";
		}else if($table == "clertk_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id)";
		}else if($table == "mass_tb"||$table == "calc_comm"||$table == "ereq_tb"||$table == "excess_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id)";
		}else if($table == "loan_tb"){
		 $query2 = "DELETE FROM $table WHERE ID IN ($id)";
		 $delRec=$db->deleRecord("DELETE FROM penalty_tb WHERE LOANID IN ($id)");
		 $delRec=$db->deleRecord("DELETE FROM loan_payment WHERE LOANID IN ($id)");
		}else{
		 $query2 = "DELETE FROM $table WHERE ID IN ($id) AND CCODE = ".$_COOKIE["ccode"]."";	
		}
		if($db->deleRecord($query2) == "0"){
			if($table == "deposit_tb"){
		      $query3 = "DELETE FROM susucomm_tb WHERE DEPID IN ($id)";
		      $delcomm=$db->deleRecord($query3);  
		    }
	        echo json_encode(array('status'=>'success', 'message'=>'Record removed successfully'));
		}else{
			echo json_encode(array('status'=>'failed', 'message'=>'Failed removing record'));
        	}
	    }
    }
?>