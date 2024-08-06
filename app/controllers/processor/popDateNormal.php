<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $username, $status_id, $othername, $role, $surname, $date, $password;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		// $result = $db->getAllData("SELECT * FROM deposit_tb WHERE DATE_NORMAL IS NULL ORDER BY ID DESC LIMIT 2000");
		// foreach($result as $row)
  //       {
  //          $id = $row["ID"];
  //          $date_created = $row["DATE_CREATED"];
  //          $fdate = explode(" ", $date_created);
  //          $fdate = $fdate[0];
  //          $update_momo = $db->updateFunction("UPDATE deposit_tb SET DATE_NORMAL = '$fdate' WHERE ID = $id");
  //       }

  //       $result = $db->getAllData("SELECT * FROM withdrawal_tb WHERE DATE_NORMAL IS NULL ORDER BY ID DESC LIMIT 2000");
		// foreach($result as $row)
  //       {
  //       	$id = $row["ID"];
  //          $date_created = $row["DATE_CREATED"];
  //          $fdate = explode(" ", $date_created);
  //          $fdate = $fdate[0];
  //          $update_momo = $db->updateFunction("UPDATE withdrawal_tb SET DATE_NORMAL = '$fdate' WHERE ID = $id");
  //       }

  //       $result = $db->getAllData("SELECT * FROM charge_tb WHERE DATE_NORMAL IS NULL ORDER BY ID DESC LIMIT 2000");
		// foreach($result as $row)
  //       {
  //       	$id = $row["ID"];
  //          $date_created = $row["DATE_CREATED"];
  //          $fdate = explode(" ", $date_created);
  //          $fdate = $fdate[0];
  //          $update_momo = $db->updateFunction("UPDATE charge_tb SET DATE_NORMAL = '$fdate' WHERE ID = $id");
  //       }

		   $result = $db->getAllData("SELECT * FROM interest_tb WHERE DATE_NORMAL IS NULL AND CCODE ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 2000");
		foreach($result as $row)
        {
        	$id = $row["ID"];
           $date_created = $row["DATE_CREATED"];
           $fdate = explode(" ", $date_created);
           $fdate = $fdate[0];
           $update_momo = $db->updateFunction("UPDATE charge_tb SET DATE_NORMAL = '$fdate' WHERE ID = $id AND CCODE ".$_COOKIE["ccode"]."");
        }

        echo "success";
	}
}
?>