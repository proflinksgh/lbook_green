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
      //Calc Penalties
	  $this->fetch_loan();
	}
    function fetch_loan()
	  {
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$result = $db->getAllData("SELECT * from formfee_tb WHERE ccode=".$_COOKIE["ccode"]."");
		if($result !==0 ){
		foreach($result as $row)
        {
          $customer=$db->get_data_here_value("SELECT CONCAT(surname,' ',othername) AS NAME FROM loanreg_tb WHERE id='".$row["customerid"]."'","NAME");
          $accno=$db->get_data_here_value("SELECT code FROM loanreg_tb WHERE id='".$row["customerid"]."'","code");
          $code=$db->get_data_here_value("SELECT CODE FROM loan_tb WHERE ACCOUNT_NO='$accno'","CODE");
          $image=$db->get_data_here_value("SELECT image FROM loanreg_tb WHERE id='".$row["customerid"]."'","image");

          if($image!==0){
          	$image="<img src='https://drive.google.com/thumbnail?id=".$image."' width='70' height='70'>";
          }else{
            if($gender==="Male"){
             $image="<img src='assets/images/male.png' width='70' height='70'>";	
            }else{
             $image="<img src='assets/images/female.png' width='70' height='70'>";	
            }
          }
          
		  $msg[] = array("id" => $row["id"], "amount" => isset($row["amount"])?number_format($row["amount"],2):0, "accno"=>$accno, "customer" => $customer, "code"=>$code, "date"=>$row["date_normal"], "image"=>$image, "postedby"=>$db->posted_by($row["posted_by"]));
        }
		echo json_encode($msg);
	}
   }
 }
?>