<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $name, $code, $initial_min_amount, $initial_max_amount, $bal_min, $bal_max, $int_rate, $int_period, $conn, $date_created;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetchAtReport();
	}
    
    function fetchAtReport(){
      $db = $this->user_initing;
      $param=$_POST["param"];
      $year=$_POST['year'];
      $month=$_POST['month'];
      $week=$_POST['week'];
      if($year==="current"){
        $year=date('Y');
      }
      
      $getData = $db->getAllData("SELECT * FROM user");
       if($getData != 0){
         foreach($getData as $row){
           $fullname = $row["name"];
           if(!is_numeric($fullname)){
            if($param==="year"){
              $countat = $db->get_data_here_value("SELECT COUNT(DISTINCT(date_normal)) as atcount FROM attendance WHERE id=".$row["uid"]." AND YEAR(date_normal)='$year'","atcount");
            }else if($param==="month"){
              $filter=$year."-".$month;
              $countat = $db->get_data_here_value("SELECT COUNT(DISTINCT(date_normal)) as atcount FROM attendance WHERE id=".$row["uid"]." AND date_normal LIKE '%$filter%'","atcount");
            }else if($param==="week"){
              if($week==="1"){
               $begin="$year-$month-01";
               $end="$year-$month-07";
              }else if($week==="2"){
               $begin="$year-$month-08";
               $end="$year-$month-14";
              }else if($week==="3"){
               $begin="$year-$month-15";
               $end="$year-$month-22";
              }else if($week==="4"){
               $begin="$year-$month-23";
               $end="$year-$month-30";
              }
              $countat = $db->get_data_here_value("SELECT COUNT(DISTINCT(date_normal)) as atcount FROM attendance WHERE id=".$row["uid"]." AND date_normal BETWEEN '$begin' AND '$end'","atcount");
            }
            $count=$db->get_data_here_value("SELECT CODE FROM admin_tb WHERE UID=".$row["user_id"]."","CODE");
            $msg[] = array("name" => $fullname, "countat"=>$countat, "count"=>$count, "userid"=>$row["uid"]); 
            }       
         }
         echo json_encode($msg);
        }else{
          echo json_encode("none");
        }
    }
}
?>