<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer, $conn, $user;

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
	    $this->profile();
	}
       function profile()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		
		if(isset($_SESSION["role"])){
		
		$filter = $db->cleanInput($filter);
		$searchfrom = $db->cleanInput($searchfrom);
		$searchto = $db->cleanInput($searchto);
		$year = date('Y');
		$selmonth[] = '';
		$fdeposit[] = '';
		$fwithdrawal[] = '';
		$fcharges[] = '';
		$todayDate = date('Y-m-d');


		if($filter == 'today'){
			$deposit_calc = $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE = ".$_COOKIE["ccode"]."" ,"amount");
			$withdrawal_calc = $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE =".$_COOKIE["ccode"]."","amount");
			$charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE =".$_COOKIE["ccode"]."","amount");


			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE =".$_COOKIE["ccode"]."","amount");
            $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE =".$_COOKIE["ccode"]."","amount");
             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE =".$_COOKIE["ccode"]."","amount");

          	$getData = $db->getAllData("SELECT * FROM deposit_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $date_created[1]);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}


		    $getData = $db->getAllData("SELECT * FROM charge_tb WHERE DATE(DATE_NORMAL) = CURDATE() AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}




		}else if($filter == 'thisweek'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");


            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");



             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE =".$_COOKIE["ccode"]."","amount");

            $getData = $db->getAllData("SELECT * FROM deposit_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $date_created[1]);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}

			$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL, 1) = YEARWEEK(CURDATE(), 1) AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}


		}else if($filter == 'yesterday'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");

            $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");


            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");
            $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");
            


            $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."","amount");

          	$getData = $db->getAllData("SELECT * FROM deposit_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);	
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $date_created[1]);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}


			$getData = $db->getAllData("SELECT * FROM charge_tb WHERE DATE_NORMAL BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE() - INTERVAL 1 SECOND AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}


		}else if($filter == 'lastweek'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");
             $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");

            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");
             $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");
             


             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."","amount");

          	$getData = $db->getAllData("SELECT * FROM deposit_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $date_created[1]);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}


			$getData = $db->getAllData("SELECT * FROM charge_tb WHERE YEARWEEK(DATE_NORMAL) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
		    $date_created = explode(" ",$row['DATE_CREATED']);
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $date_created[1]);
		 	 }
			}

		}else if($filter == 'lastmonth'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."","amount");
             $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."","amount");

            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."","amount");
             $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE=".$_COOKIE["ccode"]."","amount");
            

             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."","amount");

            $getData = $db->getAllData("SELECT * FROM deposit_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}


			$getData = $db->getAllData("SELECT * FROM charge_tb WHERE EXTRACT(YEAR_MONTH FROM DATE_NORMAL) = EXTRACT(YEAR_MONTH FROM CURDATE() - INTERVAL 1 MONTH) AND CCODE =".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}

		}else if($filter == 'thismonth'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE =".$_COOKIE["ccode"]."","amount");
             $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE =".$_COOKIE["ccode"]."","amount");


            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE =".$_COOKIE["ccode"]."","amount");
             $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE =".$_COOKIE["ccode"]."","amount");
            

             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE=".$_COOKIE["ccode"]."","amount");

            $getData = $db->getAllData("SELECT * FROM deposit_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}

		    $getData = $db->getAllData("SELECT * FROM charge_tb WHERE MONTH(DATE_NORMAL)=MONTH(NOW()) AND YEAR(DATE_NORMAL)=YEAR(NOW()) AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}


		}else if($filter == 'thisyear'){
			$deposit_calc =  0;
            $withdrawal_calc = 0;
            $charge_calc = 0;
            
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE =".$_COOKIE["ccode"]."","amount");
            $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE=".$_COOKIE["ccode"]."","amount");


            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE=".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE=".$_COOKIE["ccode"]."","amount");
            $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE=".$_COOKIE["ccode"]."","amount");


             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND CCODE=".$_COOKIE["ccode"]."","amount");
		
            $getData = $db->getAllData("SELECT * FROM month_tb WHERE ID <= (SELECT ID FROM month_tb WHERE SELECTION = '0')");
            
		    foreach($getData as $row){
			$month = $row['CODE'];
			$seldate = $year."-".$month;
			$getdepositdata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM deposit_tb WHERE YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND DATE_NORMAL LIKE '$seldate%' AND CCODE=".$_COOKIE["ccode"]."","AMOUNT");
			$getwithdrawaldata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM withdrawal_tb WHERE  YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND DATE_NORMAL LIKE '$seldate%' AND CCODE=".$_COOKIE["ccode"]."","AMOUNT");
			$getchargedata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM charge_tb WHERE  YEAR(DATE_NORMAL) = YEAR(CURDATE()) AND DATE_NORMAL LIKE '$seldate%' AND CCODE=".$_COOKIE["ccode"]."","AMOUNT");


			if($deposit_calc<$getdepositdata){
				$deposit_calc = $getdepositdata;
			}

			if($withdrawal_calc<$getwithdrawaldata){
				$withdrawal_calc = $getwithdrawaldata;
			}

			if($charge_calc<$getchargedata){
				$charge_calc = $getchargedata;
			}

			$getdepositdata = isset($getdepositdata) ?$getdepositdata:'0';
			$getwithdrawaldata = isset($getwithdrawaldata) ?$getwithdrawaldata:'0';
			$getchargedata = isset($getchargedata) ?$getchargedata:'0';
			array_push($fdeposit, $getdepositdata);
			array_push($fwithdrawal, $getwithdrawaldata);
			array_push($fcharges, $getchargedata);
			array_push($selmonth, $row['MONTHCODE']);
		  }

		}else if($filter == 'lastyear'){
			$count = 0;
			$getdepositdata=0;
			$getwithdrawaldata=0;
			$getchargedata=0;
			$deposit_calc =  0;
            $withdrawal_calc = 0;
            $charge_calc = 0;


			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND CCODE=".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND CCODE=".$_COOKIE["ccode"]."","amount");
             $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND CCODE=".$_COOKIE["ccode"]."","amount");

             $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND CCODE=".$_COOKIE["ccode"]."","amount");
            $year -= 1;

         	$getData = $db->getAllData("SELECT * FROM month_tb");
		    foreach($getData as $row){
			$month = $row['CODE'];
			$seldate = $year."-".$month;

			$getdepositdata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM deposit_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND DATE_NORMAL LIKE '$seldate%' AND CCODE=".$_COOKIE["ccode"]."","AMOUNT");
			$getwithdrawaldata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM withdrawal_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND DATE_NORMAL LIKE '$seldate%' AND CCODE=".$_COOKIE["ccode"]."","AMOUNT");
			$getchargedata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM charge_tb WHERE YEAR(DATE_NORMAL) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)) AND DATE_NORMAL LIKE '$seldate%' AND CCODE=".$_COOKIE["ccode"]."","AMOUNT");



			if($deposit_calc<$getdepositdata){
				$deposit_calc = $getdepositdata;
			}

			if($withdrawal_calc<$getwithdrawaldata){
				$withdrawal_calc = $getwithdrawaldata;
			}

			if($charge_calc<$getchargedata){
				$charge_calc = $getchargedata;
			}

			$getdepositdata = isset($getdepositdata) ?$getdepositdata:'0';
			$getwithdrawaldata = isset($getwithdrawaldata) ?$getwithdrawaldata:'0';
			$getchargedata = isset($getchargedata) ?$getchargedata:'0';
			array_push($fdeposit, $getdepositdata);
			array_push($fwithdrawal, $getwithdrawaldata);
			array_push($fcharges, $getchargedata);
			array_push($selmonth, $row['MONTHCODE']);
		}




		}else if($filter == 'custom'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");
            $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");
            

            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");
            $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");



            $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."","amount");

            $getData = $db->getAllData("SELECT * FROM deposit_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthdata=$row['AMOUNT'];
			$getmonthdata = isset($getmonthdata) ?$getmonthdata:'0';
			array_push($fdeposit, $getmonthdata);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}

          	$getData = $db->getAllData("SELECT * FROM withdrawal_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fwithdrawal, $getmonthexp);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}



          	$getData = $db->getAllData("SELECT * FROM charge_tb WHERE DATE_NORMAL >= '$searchfrom' AND DATE_NORMAL <= '$searchto' AND CCODE=".$_COOKIE["ccode"]."");
		    if($getData!==0){
		    foreach($getData as $row){
			$getmonthexp = $row['AMOUNT'];
			$getmonthexp = isset($getmonthexp) ?$getmonthexp:'0';
			array_push($fcharges, $getmonthexp);
			array_push($selmonth, $row['DATE_NORMAL']);
		 	 }
			}

		}else if($filter == 'all'){
			$deposit =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");
            $withdrawal =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");
            $charge =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");
            $interest =  $db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM interest_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");


            $deposit_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM deposit_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");
            $withdrawal_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM withdrawal_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");
            $charge_calc =  $db->get_data_here_value("SELECT MAX(AMOUNT) AS amount FROM charge_tb WHERE CCODE=".$_COOKIE["ccode"]."","amount");

            $getData = $db->getAllData("SELECT DISTINCT YEAR(DATE_NORMAL) AS YEARS FROM deposit_tb WHERE CCODE=".$_COOKIE["ccode"]."");
		    foreach($getData as $row){
			$seldate = $row['YEARS'];
			$getdepositdata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM deposit_tb WHERE DATE_NORMAL LIKE '$seldate%' WHERE CCODE=".$_COOKIE["ccode"]."","AMOUNT");
			$getwithdrawaldata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM withdrawal_tb WHERE DATE_NORMAL LIKE '$seldate%' WHERE CCODE=".$_COOKIE["ccode"]."","AMOUNT");
			$getchargedata = $db->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM charge_tb WHERE DATE_NORMAL LIKE '$seldate%' WHERE CCODE=".$_COOKIE["ccode"]."","AMOUNT");

			$getdepositdata = isset($getdepositdata) ?$getdepositdata:'0';
			$getwithdrawaldata = isset($getwithdrawaldata) ?$getwithdrawaldata:'0';
			$getchargedata = isset($getchargedata) ?$getchargedata:'0';
			array_push($fdeposit, $getdepositdata);
			array_push($fwithdrawal, $getwithdrawaldata);
			array_push($fcharges, $getchargedata);
			array_push($selmonth, $row['YEARS']);
			}
		}

		$products = $db->get_data_here_value("SELECT COUNT(ID) AS PRODUCT FROM product_tb WHERE CCODE=".$_COOKIE["ccode"]."","PRODUCT");
		$customer = $db->get_data_here_value("SELECT COUNT(ID) AS CUSTOMER FROM client_tb WHERE CCODE=".$_COOKIE["ccode"]."","CUSTOMER");
		$accounts = $db->get_data_here_value("SELECT COUNT(ID) AS ACCOUNT FROM account_tb WHERE ACC_STATUS = 0 AND CCODE=".$_COOKIE["ccode"]."","ACCOUNT");

		$arr_year[] = '';
		$arr_yr[] = '';

		$deposit_calc = isset($deposit_calc) ?$deposit_calc:'0';
        $withdrawal_calc  = isset($withdrawal_calc) ?$withdrawal_calc:'0';
        $charge_calc  = isset($charge_calc) ?$charge_calc:'0';

		$deposit = isset($deposit) ?number_format($deposit):'0';
        $withdrawal = isset($withdrawal) ?number_format($withdrawal):'0';
        $charge = isset($charge) ?number_format($charge):'0';
        $interest = isset($interest) ?number_format($interest):'0';

        if($_SESSION["role"]==1){
         $msg[] = array("products"=>$products, "accounts"=>$accounts, "customer"=>$customer, "deposit_calc"=>$deposit_calc, "withdrawal_calc"=>$withdrawal_calc, "charge_calc"=>$charge_calc, "deposit"=>$deposit, "withdrawal"=>$withdrawal, "charge"=>$charge, "interest"=>$interest, "selmonth"=>$selmonth, "fdeposit"=>$fdeposit, "fwithdrawal"=>$fwithdrawal, "fcharges"=>$fcharges);
        }else{
         $msg[] = array("products"=>$products, "accounts"=>$accounts, "customer"=>$customer, "deposit_calc"=>0, "withdrawal_calc"=>0, "charge_calc"=>0, "deposit"=>0, "withdrawal"=>0, "charge"=>0, "interest"=>0, "selmonth"=>$selmonth, "fdeposit"=>0, "fwithdrawal"=>0, "fcharges"=>0);
        }
        echo json_encode($msg);
	   }else{
	   echo json_encode("expire");
	   }
	}
}
?>