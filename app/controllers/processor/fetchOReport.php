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
		$msg = array();
		
		if(isset($_POST["date"])){
		$date = $db->cleanInput($date);
		$date2 = $db->cleanInput($date2);
		$user=$db->cleanInput($user);
	    $totmomoovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=1 AND status=0 AND posted_by=$user","AMT");
	    $totmomooversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=1 AND status=0 AND posted_by=$user","AMT");

         
	    $totsusuovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=2 AND status=0 AND posted_by=$user","AMT");
	    $totsusuoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=2 AND status=0 AND posted_by=$user","AMT");

	    $totecashovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=3 AND status=0 AND posted_by=$user","AMT");
	    $totecashoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=3 AND status=0 AND posted_by=$user","AMT");

	    $totsalesovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=4 AND status=0 AND posted_by=$user","AMT");
	    $totsalesoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=4 AND status=0 AND posted_by=$user","AMT");


	    $totevdovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=5 AND status=0 AND posted_by=$user","AMT");
	     $totevdoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=5 AND status=0 AND posted_by=$user","AMT");

	     $totsuswithovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=6 AND status=0 AND posted_by=$user","AMT");
	     $totsuswithoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND type=6 AND status=0 AND posted_by=$user","AMT");

	     $totovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND status=0 AND posted_by=$user","AMT");
	     $totoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=1 AND status=0 AND posted_by=$user","AMT");

	    $totmomoshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=1 AND status=0 AND posted_by=$user","AMT");
	    $totmomoshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=1 AND status=0 AND posted_by=$user","AMT");

	    $totsusushort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=2 AND status=0 AND posted_by=$user","AMT");
	    $totsusushortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=2 AND status=0 AND posted_by=$user","AMT");

	    $totecashshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=3 AND status=0 AND posted_by=$user","AMT");
	    $totecashshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=3 AND status=0 AND posted_by=$user","AMT");


	    $totsalesshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=4 AND status=0 AND posted_by=$user","AMT");
	    $totsalesshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=4 AND status=0 AND posted_by=$user","AMT");

	    $totevdshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=5 AND status=0 AND posted_by=$user","AMT");
	     $totevdshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=5 AND status=0 AND posted_by=$user","AMT");

	     $totsusshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=6 AND status=0 AND posted_by=$user","AMT");
	     $totsusshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND type=6 AND status=0 AND posted_by=$user","AMT");

	     $totshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND status=0 AND posted_by=$user","AMT");
	     $totshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND ttype=2 AND status=0 AND posted_by=$user","AMT");

	    $totoverandshortage = $this->user->get_data_here_value("SELECT SUM(amount) as AMOUNT from excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND status=0 AND posted_by=$user", "AMOUNT");
	    $totoverandshortageamt = $this->user->get_data_here_value("SELECT SUM(oamount) as AMOUNT from excess_tb WHERE date(date_created)  >= '$date' AND date(date_created) <='$date2' AND status=0 AND posted_by=$user", "AMOUNT");

	    $user_role=$db->get_data_here_value("SELECT USER_ROLE FROM admin_tb WHERE CODE=$user","USER_ROLE");
	    
	    }else{
	    if(isset($_POST['user'])){
	       $totmomoovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=1 AND status=0 AND posted_by=$user","AMT");
	    $totmomooversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=1 AND status=0 AND posted_by=$user","AMT");

         
	    $totsusuovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=2 AND status=0 AND posted_by=$user","AMT");
	    $totsusuoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=2 AND status=0 AND posted_by=$user","AMT");

	    $totecashovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=3 AND status=0 AND posted_by=$user","AMT");
	    $totecashoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=3 AND status=0 AND posted_by=$user","AMT");

	    $totsalesovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=4 AND status=0 AND posted_by=$user","AMT");
	    $totsalesoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=4 AND status=0 AND posted_by=$user","AMT");


	    $totevdovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=5 AND status=0 AND posted_by=$user","AMT");
	     $totevdoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=5 AND status=0 AND posted_by=$user","AMT");

	     $totsuswithovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=6 AND status=0 AND posted_by=$user","AMT");
	     $totsuswithoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=6 AND status=0 AND posted_by=$user","AMT");

	     $totovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  status=0 AND posted_by=$user","AMT");
	     $totoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  status=0 AND posted_by=$user","AMT");

	    $totmomoshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=1 AND status=0 AND posted_by=$user","AMT");
	    $totmomoshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=1 AND status=0 AND posted_by=$user","AMT");

	    $totsusushort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=2 AND status=0 AND posted_by=$user","AMT");
	    $totsusushortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=2 AND status=0 AND posted_by=$user","AMT");

	    $totecashshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=3 AND status=0 AND posted_by=$user","AMT");
	    $totecashshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=3 AND status=0 AND posted_by=$user","AMT");


	    $totsalesshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=4 AND status=0 AND posted_by=$user","AMT");
	    $totsalesshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=4 AND status=0 AND posted_by=$user","AMT");

	    $totevdshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=5 AND status=0 AND posted_by=$user","AMT");
	     $totevdshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=5 AND status=0 AND posted_by=$user","AMT");

	     $totsusshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=6 AND status=0 AND posted_by=$user","AMT");
	     $totsusshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=6 AND status=0 AND posted_by=$user","AMT");

	     $totshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND status=0 AND posted_by=$user","AMT");
	     $totshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND status=0 AND posted_by=$user","AMT");

	    $totoverandshortage = $this->user->get_data_here_value("SELECT SUM(amount) as AMOUNT from excess_tb WHERE  status=0 AND posted_by=$user", "AMOUNT");
	    $totoverandshortageamt = $this->user->get_data_here_value("SELECT SUM(oamount) as AMOUNT from excess_tb WHERE  status=0 AND posted_by=$user", "AMOUNT");

	    $user_role=$db->get_data_here_value("SELECT USER_ROLE FROM admin_tb WHERE CODE=$user","USER_ROLE");

		}else{
		     $totmomoovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=1 AND status=0","AMT");
	    $totmomooversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=1 AND status=0","AMT");

         
	    $totsusuovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=2 AND status=0","AMT");
	    $totsusuoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=2 AND status=0","AMT");

	    $totecashovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=3 AND status=0","AMT");
	    $totecashoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=3 AND status=0","AMT");

	    $totsalesovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=4 AND status=0","AMT");
	    $totsalesoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=4 AND status=0","AMT");


	    $totevdovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=5 AND status=0","AMT");
	     $totevdoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=5 AND status=0","AMT");

	     $totsuswithovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  type=6 AND status=0","AMT");
	     $totsuswithoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  type=6 AND status=0","AMT");

	     $totovers=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  status=0","AMT");
	     $totoversamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  status=0","AMT");

	    $totmomoshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=1 AND status=0","AMT");
	    $totmomoshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=1 AND status=0","AMT");

	    $totsusushort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=2 AND status=0","AMT");
	    $totsusushortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=2 AND status=0","AMT");

	    $totecashshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=3 AND status=0","AMT");
	    $totecashshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=3 AND status=0","AMT");


	    $totsalesshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=4 AND status=0","AMT");
	    $totsalesshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=4 AND status=0","AMT");

	    $totevdshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=5 AND status=0","AMT");
	     $totevdshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=5 AND status=0","AMT");

	     $totsusshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=6 AND status=0","AMT");
	     $totsusshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND type=6 AND status=0","AMT");

	     $totshort=$db->get_data_here_value("SELECT SUM(amount) AS AMT FROM excess_tb WHERE  ttype=2 AND status=0","AMT");
	     $totshortamt=$db->get_data_here_value("SELECT SUM(oamount) AS AMT FROM excess_tb WHERE  ttype=2 AND status=0","AMT");

	    $totoverandshortage = $this->user->get_data_here_value("SELECT SUM(amount) as AMOUNT from excess_tb WHERE  status=0", "AMOUNT");
	    $totoverandshortageamt = $this->user->get_data_here_value("SELECT SUM(oamount) as AMOUNT from excess_tb WHERE  status=0", "AMOUNT");
	    $user_role="1";
			}
	    }
	              
	    $msg[] = array("totmomoovers"=>isset($totmomoovers)?number_format($totmomoovers,2):0, "totsusuovers"=>isset($totsusuovers)?number_format($totsusuovers,2):0, "totecashovers"=>isset($totecashovers)?number_format($totecashovers,2):0, "totsalesovers"=>isset($totsalesovers)?number_format($totsalesovers,2):0, "totevdovers"=>isset($totevdovers)?number_format($totevdovers,2):0, "totsuswithovers"=>isset($totsuswithovers)?number_format($totsuswithovers,2):0, "totovers"=>isset($totovers)?number_format($totovers,2):0, "totmomoshort"=>isset($totmomoshort)?number_format($totmomoshort,2):0, "totsusushort"=>isset($totsusushort)?number_format($totsusushort,2):0, "totecashshort"=>isset($totecashshort)?number_format($totecashshort,2):0, "totsalesshort"=>isset($totsalesshort)?number_format($totsalesshort,2):0, "totevdshort"=>isset($totevdshort)?number_format($totevdshort,2):0, "totsusshort"=>isset($totsusshort)?number_format($totsusshort,2):0, "totshort"=>isset($totshort)?number_format($totshort,2):0, "totoverandshortage"=>isset($totoverandshortage)?number_format($totoverandshortage,2):0, "totsuswithshort"=>isset($totsuswithshort)?number_format($totsuswithshort,2):0,"totmomooversamt"=>isset($totmomooversamt)?number_format($totmomooversamt,2):0, "totsusuoversamt"=>isset($totsusuoversamt)?number_format($totsusuoversamt,2):0, "totecashoversamt"=>isset($totecashoversamt)?number_format($totecashoversamt,2):0, "totsalesoversamt"=>isset($totsalesoversamt)?number_format($totsalesoversamt,2):0, "totevdoversamt"=>isset($totevdoversamt)?number_format($totevdoversamt,2):0, "totsuswithoversamt"=>isset($totsuswithoversamt)?number_format($totsuswithoversamt,2):0, "totoversamt"=>isset($totoversamt)?number_format($totoversamt,2):0, "totmomoshortamt"=>isset($totmomoshortamt)?number_format($totmomoshortamt,2):0, "totsusushortamt"=>isset($totsusushortamt)?number_format($totsusushortamt,2):0, "totecashshortamt"=>isset($totecashshortamt)?number_format($totecashshortamt,2):0, "totsalesshortamt"=>isset($totsalesshortamt)?number_format($totsalesshortamt,2):0, "totevdshortamt"=>isset($totevdshortamt)?number_format($totevdshortamt,2):0, "totsusshortamt"=>isset($totsusshortamt)?number_format($totsusshortamt,2):0, "totshortamt"=>isset($totshortamt)?number_format($totshortamt,2):0, "totoverandshortamtage"=>isset($totoverandshortamtage)?number_format($totoverandshortamtage,2):0, "totsuswithshortamt"=>isset($totsuswithshortamt)?number_format($totsuswithshortamt,2):0, "totoverandshortageamt"=>isset($totoverandshortageamt)?number_format($totoverandshortageamt,2):0,  "role"=>$user_role);
		    echo json_encode($msg);
	}
}
?>