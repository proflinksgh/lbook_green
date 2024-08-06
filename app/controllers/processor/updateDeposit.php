<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $idDate;
	private $idDeposit;

    	function __construct()
    	{
    	    $this->user_tag = $this->model('master_class');
    		$this->user_initing = $this->model('extend_function');
    		$this->date_composer = $this->user_initing->timer;
    		$this->conn = new master_class();
    	}

    
        public function index()
    	{
    		$this->update();
    	}

	  function update()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$idDate = $db->cleanInput($idDate);
		$id = $db->cleanInput($id);
		$idDeposit = $db->cleanInput($idDeposit);
		$currDate = date('Y-m-d H:i:s');
		$result = $db->updateFunction("UPDATE deposit_tb SET DATE_CREATED = '$idDate', AMOUNT = '$idDeposit', DATE_NORMAL = '$idDate', DATE_MODIFIED = '$currDate' where ID = $id AND CCODE = ".$_COOKIE["ccode"]."");
    		if($result == "0"){
    			echo json_encode(array('status'=>'success', 'message'=>'Transaction updated successfully'));
    		}else{
    		  echo json_encode(array('status'=>'failed', 'message'=>'Failed to update record'));
    		}
		}
	}
?>