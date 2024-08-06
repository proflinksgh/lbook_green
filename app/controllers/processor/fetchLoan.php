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
      if($this->user_initing->calcPenalty()===1){
      if($this->user_initing->validateLoan()===1){
       $this->fetch_loan();
       }
      }
  }

    function fetch_loan()
    {
    extract($_POST);
    $db = $this->user_initing;
    $msg = array();
    $result = $db->getAllData("SELECT * from loan_tb WHERE CCODE=".$_COOKIE["ccode"]." AND STATUS=0 AND REPAY_STATUS=1 OR STATUS=1 AND REPAY_STATUS=1");
    if($result !==0 ){
    foreach($result as $row)
        {
          $customer=$db->get_data_here_value("SELECT CONCAT(surname,' ',othername) AS NAME FROM loanreg_tb WHERE CODE='".$row["ACCOUNT_NO"]."'","NAME");
          $image=$db->get_data_here_value("SELECT image FROM loanreg_tb WHERE code='".$row["ACCOUNT_NO"]."'","image");
          $custid=$db->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='".$row["ACCOUNT_NO"]."'","id");
          $gender=$db->get_data_here_value("SELECT gender FROM loanreg_tb WHERE code='".$row["ACCOUNT_NO"]."'","gender");
          if($row["LOAN_PERIOD"]==="1"){
            $row["LOAN_PERIOD"]="1 Month";
          }else if($row["LOAN_PERIOD"]==="2"){
            $row["LOAN_PERIOD"]="2 Months";
          }else if($row["LOAN_PERIOD"]==="3"){
            $row["LOAN_PERIOD"]="3 Months";
          }

          if($row["STATUS"]==="0"){
            $status="<i class='read'>Active</i>";
          }else if($row["STATUS"]==="1"){
            $status="<div><button mature=".$row["DAYS_LEFT"]." lid=".$row['ID']." cid=".$custid." lid=".$row['ID']." class='btn btn-primary btnApproveLoan'>Approve</button><button lid=".$row['ID']." style='margin-left:5px' class='btn btn-danger btnDeclineLoan'>Decline</button></div>";
          }else if($row["STATUS"]==="2"){
            $status="<i class='unread'>Declined</i>";
          }else if($row["STATUS"]==="3"){
            $status="<i class='unread'>Matured</i>";
          }

          $payment=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE CUSTOMERID=$custid AND LOANID=".$row["ID"]."","AMT");

          $penalty=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE CUSTOMERID=$custid AND LOANID=".$row["ID"]."","AMT");

          if($image!==0){
            $image="<img align='center' src='https://drive.google.com/thumbnail?id=".$image."' width='70' height='70'>";
          }else{
            if($gender==="Male"){
             $image="<img align='center' src='assets/images/male.png' width='70' height='70'>"; 
            }else{
             $image="<img align='center' src='assets/images/female.png' width='70' height='70'>"; 
            }
          }
          
          $capacity=$row["CAPACITY"]==="1"?"1 Week":"2 Weeks";

          $balance=($row["AMOUNT"]+$row["INTEREST"]+$penalty)-$payment;
          $topay=$row["AMOUNT"]+$row["INTEREST"];
          $msg[] = array("id" => $row["ID"], "rname"=>$customer, "period" => $row["LOAN_PERIOD"], "repayment"=>$payment, "customerid"=>$custid, "loanid"=>$row["ID"], "accno" => $row["ACCOUNT_NO"], "customer" => "<a href='#' cid=".$custid." loanid=".$row["ID"]." class='btnViewDetail'>$image<br>$customer</a>", "date" => $row["DATE_CREATED"], "amount" => isset($row["AMOUNT"])?number_format($row["AMOUNT"],2):0, "capacity"=>$capacity, "days_left" => $row["DAYS_LEFT"], "interest" => isset($row["INTEREST"])?number_format($row["INTEREST"],2):0, "balance"=>isset($balance)?number_format($balance,2):0, "topay" => isset($topay)?number_format($topay,2):0, "payment"=>isset($payment)?number_format($payment,2):0, "penalty"=>isset($penalty)?number_format($penalty,2):0, "image"=>$image, "status"=>$status);
        }
    echo json_encode($msg);
  }
   }
 }
?>