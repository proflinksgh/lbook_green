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



    function delete_contractor()
	   {
		extract($_POST);
		$db = $this->user_initing;

		$ids = $db->cleanInput($ids);

		$query = "UPDATE contractor_tb set STATUS_ID = 2 where ID IN ($ids)";
		
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}
	
	
	
	  function delete_earn()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$ids = $db->cleanInput($ids);
		
		$query = "DELETE FROM earn_auth where USER_ID IN ($ids)";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
	}
	

	function delete_record()
	   {
		extract($_POST);
		$db = $this->user_initing;

		$ids = $db->cleanInput($ids);

	
		$query = "DELETE from login_tb where USER_ID IN ($ids)";
		
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}
	
	
	
		function delete_potential()
	   {
		extract($_POST);
		$db = $this->user_initing;

		$ids = $db->cleanInput($ids);

		$query = "DELETE from clients_tb where ID IN ($ids)";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}


	
		function delete_admin()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$ids = $db->cleanInput($ids);
		
		$query = "UPDATE links_admin_tb set STATUS_ID = 2 where ID IN ($ids)";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
	}
	
	
		
	public function index()
	{
		 
		extract($_POST);


		 if(isset($rotator))
		 {

		 	switch ($rotator) {

				case 1:
		 			$this->delete_record();
	 			break;

	 			case 2:
		 			$this->delete_admin();
	 			break;
	 			
	 				case 9:
		 			$this->delete_contractor();
	 			break;
	 			
	 			 case 34:
		 			$this->delete_potential();
	 			break;
	 			
	 				case 40:
		 			$this->delete_earn();
	 			break;
	 			
	 					case 55:
		 			$this->delete_location();
	 			break;

		 		default:
		 			echo $rotator;
		 		break;
		 	}
		 } 
	}
}

?>