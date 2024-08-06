<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $date, $min_bal;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_minimBal();
	}
       function fetch_minimBal()
		{
		extract($_POST);
		$db = $this->user_initing;
		$product = $db->cleanInput($product);
		$min_bal = $db->get_data_here_value("SELECT BALANCE_MIN FROM product_tb where NAME = '$product' AND CCODE=".$_COOKIE["ccode"]."","BALANCE_MIN");
		echo json_encode(array("min_bal"=>number_format($min_bal)));
		}
	}

?>