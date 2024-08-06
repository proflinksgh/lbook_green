<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $name, $code, $min_amount, $max_amount, $form_fee, $processing_fee, $interest, $date_created;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	

	public function index()
	{
	    $this->fetch_loan_product();
	}
       function fetch_loan_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$amount=$db->cleanInput($amount);
		$code=$db->cleanInput($code);
		$accno=$db->cleanInput($accno);
		$msg = array();
		$allamt=$db->checkAmtGive($accno);
		if($allamt===2000){
		 $stamt=1000;
		}else{
		 $stamt=$allamt-2000;
		}
		$result = $db->getAllData("SELECT MIN_AMOUNT, MAX_AMOUNT from loan_product_tb WHERE CODE=$code AND CCODE=".$_COOKIE["ccode"]."");
		if($result !==0 ){
		foreach($result as $row)
        {
			echo json_encode(array("min_amount" => $row["MIN_AMOUNT"], "max_amount" => $row["MAX_AMOUNT"], "stamt"=>$stamt, "endamt"=>$allamt));
        }
	 }else{
	 	echo json_encode(array("result" => "Product not found"));
	 }
	}
}
?>