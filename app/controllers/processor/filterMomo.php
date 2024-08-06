<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $date, $user, $amount, $deposit, $withdrawal, $name, $role, $fees;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
		$this->user = new extend_function();

	}
	
	public function index()
	{
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$date = $db->cleanInput($date);
		$date2 = $db->cleanInput($date2);
		$user = $db->cleanInput($user);
		$uid = $user;
		$msg = array();
		$user = $db->get_data_here_value("SELECT CODE FROM admin_tb WHERE CODE=$user","CODE");
		$user_id=$db->get_data_here_value("SELECT UID FROM admin_tb WHERE CODE=$user","UID");
	    $result = $this->user->getAllData("SELECT SURNAME, OTHERNAME, ROLE from admin_tb adt JOIN role_tb rt ON adt.USER_ROLE = rt.ID WHERE adt.CODE = $uid AND adt.CCODE=".$_COOKIE["ccode"]."");  
		if($result!=0){
		foreach($result as $row)
        {
          $name = $row['SURNAME']." ".$row['OTHERNAME'];
          $role = $row['ROLE'];
          }
		}else{
		  $name="N/A";
		  $role = "N/A";
		}
		
	        if($date==""&&$date2==""){
	         $deposit = $this->user->get_data_here_value("SELECT SUM(DEPOSIT) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $deposit_comm = $this->user->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $cashout = $this->user->get_data_here_value("SELECT SUM(CASHOUT) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $cashout_comm = $this->user->get_data_here_value("SELECT SUM(CASHOUT_COMM) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         
	         $sales = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from sales_tb where POSTED_BY=$user", "AMOUNT");
	         $sales_comm = $this->user->get_data_here_value("SELECT SUM(SCOMM) as AMOUNT from sales_tb where POSTED_BY='$user'", "AMOUNT");
	         
	         $evd = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from evd_tb where POSTED_BY=$user", "AMOUNT");
	         $evd_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from evd_tb where POSTED_BY='$user'", "AMOUNT");
	         
	         $clerk = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from clertk_tb where POSTED_BY=$user", "AMOUNT");
	         $clerk_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from clertk_tb where POSTED_BY='$user'", "AMOUNT");
	         
	         $mass = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from mass_tb where POSTED_BY=$user", "AMOUNT");
	         $mass_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from mass_tb where POSTED_BY='$user'", "AMOUNT");
	         if(isset($user_id)){
	         $attcomm = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM calc_comm WHERE TARGET=$user_id","AMT");
	         }else{
	          $attcomm =0;   
	         }
	         
	        }else if($date2 == '0'){
	         $deposit = $this->user->get_data_here_value("SELECT SUM(DEPOSIT) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $deposit_comm = $this->user->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $cashout = $this->user->get_data_here_value("SELECT SUM(CASHOUT) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $cashout_comm = $this->user->get_data_here_value("SELECT SUM(CASHOUT_COMM) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         
	         $sales = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from sales_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         $sales_comm = $this->user->get_data_here_value("SELECT SUM(SCOMM) as AMOUNT from sales_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         
	         $evd = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from evd_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         $evd_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from evd_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         
	         $clerk = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from clertk_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         $clerk_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from clertk_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         
	         $mass = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from mass_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         $mass_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from mass_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'", "AMOUNT");
	         if(isset($user_id)){
	         $attcomm = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM calc_comm WHERE TARGET=$user_id AND date(DATE_CREATED) ='$date'","AMT");
	         }else{
	          $attcomm=0;   
	         }
	        }else{
	         $deposit = $this->user->get_data_here_value("SELECT SUM(DEPOSIT) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $deposit_comm = $this->user->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $cashout = $this->user->get_data_here_value("SELECT SUM(CASHOUT) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         $cashout_comm = $this->user->get_data_here_value("SELECT SUM(CASHOUT_COMM) as AMOUNT from momo_trans_tb where POSTED_BY='$user' AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	         
	         $sales = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from sales_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         $sales_comm = $this->user->get_data_here_value("SELECT SUM(SCOMM) as AMOUNT from sales_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         
	         $evd = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from evd_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         $evd_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from evd_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         
	         $clerk = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from clertk_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         $clerk_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from clertk_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         
	         $mass = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from mass_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         $mass_comm = $this->user->get_data_here_value("SELECT SUM(COMMISSION) as AMOUNT from mass_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT");
	         
	         if(isset($user_id)){
	         $attcomm = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM calc_comm WHERE TARGET=$user_id AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'","AMT");
	         }else{
	         $attcomm=0;   
	         }
	        }
	        
	        $tot_earn = $deposit+$cashout+$sales+$evd+$clerk+$mass;
	        $tot_comm = $deposit_comm+$cashout_comm+$sales_comm+$evd_comm+$clerk_comm+$mass_comm;
	        $overral_comm = $deposit_comm+$cashout_comm+$sales_comm+$evd_comm+$clerk_comm+$mass_comm+$attcomm;

			$msg[] = array("attcomm"=>isset($attcomm)?$attcomm:0, "overral_comm"=>isset($overral_comm)?number_format($overral_comm,2):0, "tot_earn"=>number_format($tot_earn,2), "tot_comm"=>number_format($tot_comm,2), "sales"=>isset($sales)?$sales:0, "sales_comm"=>isset($sales_comm)?$sales_comm:0, "evd"=>number_format(isset($evd)?$evd:0), "evd_comm"=>number_format(isset($evd_comm)?$evd_comm:0), "clerk"=>number_format(isset($clerk)?$clerk:0), "clerk_comm"=>number_format(isset($clerk_comm)?$clerk_comm:0), "mass"=>number_format(isset($mass)?$mass:0), "mass_comm"=>number_format(isset($mass_comm)?$mass_comm:0), "name"=>$name, "role"=>$role, "deposit" => isset($deposit)?$deposit:0, "deposit_comm" => isset($deposit_comm)?$deposit_comm:0, "cashout" => isset($cashout)?$cashout:0, "cashout_comm" => isset($cashout_comm)?number_format($cashout_comm,2):0);
		    echo json_encode($msg);
	}
}
?>