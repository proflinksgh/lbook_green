<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $name, $fee_type, $current_balance, $date, $deposits, $withdrawals, $dob, $gender, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $account_number;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_product();
	}
      
      function fetch_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$result = $db->getAllData("SELECT itb.DATE_CREATED, itb.ID, pt.NAME, itb.AMOUNT, YEAR, MONTH, CONCAT(FIRSTNAME,' ',LASTNAME, ' ', ct.OTHERNAME) AS CNAME, ACCOUNT_NUMBER FROM client_tb ct JOIN account_tb atb on ct.CODE=atb.CLIENT_ID JOIN interest_tb itb ON atb.ACCOUNT_NO = itb.ACCOUNT_NUMBER JOIN product_tb pt ON pt.CODE = atb.PRODUCT_ID ORDER BY ID DESC LIMIT 100");
		if($result !==0){
		foreach($result as $row)
        {
            // $this->fname = $row['FIRSTNAME'];
        	// $this->lname = $row["LASTNAME"];
        	// $this->othername = $row["OTHERNAME"];
        	
           if($row['MONTH'] == '1'){
                $month = 'January';
            }else if($row['MONTH'] == '2'){
                $month = 'February';
            }else if($row['MONTH'] == '3'){
                $month = 'March';
            }else if($row['MONTH'] == '4'){
                $month = 'April';
            }else if($row['MONTH'] == '5'){
                $month = 'May';
            }else if($row['MONTH'] == '6'){
                $month = 'June';
            }else if($row['MONTH'] == '7'){
                $month = 'July';
            }else if($row['MONTH'] == '8'){
                $month = 'August';
            }else if($row['MONTH'] == '9'){
                $month = 'September';
            }else if($row['MONTH'] == '10'){
                $month = 'October';
            }else if($row['MONTH'] == '11'){
                $month = 'November';
            }else if($row['MONTH'] == '12'){
                $month = 'December';
            }
            
			$msg[] = array("id" => $row['ID'], "product"=>$row['NAME'], "name" => $row["CNAME"], "amount" => $row['AMOUNT'], "accno" => $row['ACCOUNT_NUMBER'], "date" => $row['DATE_CREATED'], "year" => $row['YEAR'], "month" => $month);
        }
		echo json_encode($msg);
     }else{
     	echo json_encode("none");
     }
	}
}
?>