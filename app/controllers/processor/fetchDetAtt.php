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
	    $this->fetchDetAtt();
	}
    
      function fetchDetAtt(){
      $db = $this->user_initing;
      $userid=$_POST["userid"];
      $getProgram=0;
      $year=$_POST["year"];
      if($year==="current"){
        $year=date('Y');
      }
      if(isset($_POST["param"])){
        if($_POST["param"]==="year"){
         $getProgram = $db->getAllData("SELECT * FROM attendance WHERE id=$userid AND state=1 AND YEAR(date_normal)='$year' ORDER BY date_cr DESC");
        }else if($_POST["param"]==="month"){
         $month=$_POST["month"];
         $filter=$year."-".$month;
         $getProgram = $db->getAllData("SELECT * FROM attendance WHERE id=$userid AND date_normal LIKE '%$filter%' ORDER BY date_cr DESC");
        }else if($_POST["param"]==="week"){
          $month=$_POST["month"];
          $week=$_POST["week"];
          if($_POST["week"]==="1"){
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
         $getProgram = $db->getAllData("SELECT * FROM attendance WHERE id=$userid AND date_normal BETWEEN '$begin' AND '$end' ORDER BY date_cr DESC");
        }
      }
      
       if($getProgram != 0){
         foreach($getProgram as $row){
           $fullname = $db->get_data_here_value("SELECT name FROM user WHERE user_id='".$row["id"]."'","name");
           if(!is_numeric($fullname)){
            $stime = explode(' ',$row["date_cr"]);
            $time = date('h:i:s a', strtotime($stime[1]));
            if(strtotime($time)>=strtotime("18:00")&&strtotime($time)<=strtotime("24:00")){
             $state = "CHECK OUT";   
            }else{
             $state = "CHECK IN";     
            }
            
            $msg[] = array("time"=>$time, "id" => $row['id'], "name" => $fullname, "state"=>$state, "date"=>$row["date_normal"]);    
          }     
         }
         echo json_encode($msg);
        }else{
          echo json_encode("none");
        }
    }
}
?>