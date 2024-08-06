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
		$msg = array();
		$result = $db->getAllData("SELECT ID, NAME, PENALTY, CODE, MIN_AMOUNT, MAX_AMOUNT, FORM_FEE, PROCESSING_FEE, INTEREST, DATE_CREATED from loan_product_tb WHERE CCODE=".$_COOKIE["ccode"]."");
		if($result !==0 ){
		foreach($result as $row)
        {
            $this->id = $row['ID'];
            $this->name = $row['NAME'];
            $this->code = $row['CODE'];
        	$this->min_amount = $row["MIN_AMOUNT"];
        	$this->max_amount = $row["MAX_AMOUNT"];
        	$this->form_fee = $row['FORM_FEE'];
        	$this->processing_fee = $row['PROCESSING_FEE'];
        	$this->interest = $row['INTEREST'];
        	$this->penalty = $row['PENALTY'];
        	$this->date_created = $row['DATE_CREATED'];

			$msg[] = array("id" => $this->id, "name" => $this->name, "code" => $this->code, "min_amount" => $this->min_amount, "max_amount" => $this->max_amount, "form_fee" => $this->form_fee, "processing_fee" => $this->processing_fee, "interest" => $this->interest, "penalty"=>$this->penalty, "date_created" => $this->date_created);
        }
		echo json_encode($msg);
	}
	}
}
?>