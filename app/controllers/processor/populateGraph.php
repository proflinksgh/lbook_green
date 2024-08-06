<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $fname, $othername;

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
	    $this->fetch_deduction();
	}
       function fetch_deduction()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$value = array();
		$range = array();
		
		$range[] = ''; 
		$value[] = '';
		
		$fetch_max=$this->user->get_data_here_value("SELECT Max(CAST(BALANCE as SIGNED)) as maxbal FROM balance_tb WHERE CCODE=".$_COOKIE["ccode"]."", "maxbal");
		$fetch_min=$this->user->get_data_here_value("SELECT BALANCE_MIN FROM product_tb where ID ='1' AND CCODE=".$_COOKIE["ccode"]."", "BALANCE_MIN");
		
		$first_div = $fetch_max/10;
		
		//First calc
		$first = number_format($fetch_min)." - ".number_format($first_div);
		array_push($range, $first);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $fetch_min AND $first_div AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		//Second calc
		$next = $first_div + 1;
		$end = $first_div * 2;
		$second = number_format($next)." - ".number_format($end);
		array_push($range, $second);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		//Third calc
		$next = $end + 1;
		$end = $first_div * 3;
		$third = number_format($next)." - ".number_format($end);
		array_push($range, $third);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		//Forth calc
		$next = $end + 1;
		$end = $first_div * 4;
		$forth = number_format($next)." - ".number_format($end);
		array_push($range, $forth);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		
		//Five calc
		$next = $end + 1;
		$end = $first_div * 5;
		$five = number_format($next)." - ".number_format($end);
		array_push($range, $five);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		
		//Six calc
		$next = $end + 1;
		$end = $first_div * 6;
		$six = number_format($next)." - ".number_format($end);
		array_push($range, $six);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		
		//Seven calc
		$next = $end + 1;
		$end = $first_div * 7;
		$seven = number_format($next)." - ".number_format($end);
		array_push($range, $seven);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		
		//Eight calc
		$next = $end + 1;
		$end = $first_div * 8;
		$eight = number_format($next)." - ".number_format($end);
		array_push($range, $eight);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		
		
		//Nine calc
		$next = $end + 1;
		$end = $first_div * 9;
		$nine = number_format($next)." - ".number_format($end);
		array_push($range, $nine);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		
		//Ten calc
		$next = $end + 1;
		$end = $first_div * 10;
		$ten = number_format($next)." - ".number_format($end);
		array_push($range, $ten);
		$count=$this->user->get_data_here_value("SELECT COUNT(BALANCE) as ACCOUNT FROM balance_tb WHERE BALANCE BETWEEN $next AND $end AND CCODE=".$_COOKIE["ccode"]."", "ACCOUNT");
		array_push($value, $count);
		
		$msg[]=array("label"=>$range, "value"=>$value);
		
        echo json_encode($msg);
	}
}
?>