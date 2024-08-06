<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
		public function index()
	{
        $this->post_register();
	}


	function post_register()
	 {
		extract($_POST);
		    $db = $this->user_initing;
    		$image = $db->cleanInput($image);
    		$title = $db->cleanInput($title);
    		$category = $db->cleanInput($category);
    		$gender = $db->cleanInput($gender);
    		$surname = $db->cleanInput($surname);
    		$othername = $db->cleanInput($othername);
    		$phone = $db->cleanInput($phone);
    		$dob = $db->cleanInput($dob);
    		$dependant = $db->cleanInput($dependant);
    		$identification = $db->cleanInput($identification);
    		$idno = $db->cleanInput($idno);
    		$dateofissue = $db->cleanInput($dateofissue);
    		$expiry = $db->cleanInput($expiry);
    		$namebusiness = $db->cleanInput($namebusiness);
    		$address = $db->cleanInput($address);
    		$location = $db->cleanInput($location);
    		$telno = $db->cleanInput($telno);
        $noofyears = $db->cleanInput($noofyears);
        $emptype=$db->cleanInput($emptype);
        $employer = $db->cleanInput($employer);
        $position = $db->cleanInput($position);
        $employertel = $db->cleanInput($employertel);
        $netsalary = $db->cleanInput($netsalary);
        $bdirection = $db->cleanInput($bdirection);
        $rdirection = $db->cleanInput($rdirection);
        $appdate = $db->cleanInput($appdate)." ".date("H:i");
    		$currDate = $appdate;
        $year=date("Y");
        $user = $_SESSION['id'];
    		if(isset($_SESSION['id'])){
    		if($db->get_data_here_value("SELECT id FROM loanreg_tb WHERE surname='$surname' AND othername='$othername' AND phone='$phone'","id")===0){
        		$params = array($db->lncodeIgnite("loanreg_tb", $category), $category, $image, $title, $surname, $othername, $phone, $gender, $dob, $dependant, $identification, $idno, $dateofissue, $expiry, $namebusiness, $address, $location, $telno, $noofyears, $emptype, $employer, $position, $employertel, $netsalary, $bdirection, $rdirection, $user, $currDate, $currDate, $_COOKIE["ccode"], $db->hcode());

    			$query = "INSERT INTO loanreg_tb (code, regtype, image, title, surname, othername, phone, gender, dob, dependant, idtype, idno, dateissue, dateexpire, busname, address, location, btel, byears, emptype, empname, position, empno, netsal, bdirection, rdirection, posted_by, date_created, date_modified, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    			$insert_contribution = $db->InsertRecords($query, $params);
        		if($insert_contribution>0){
        		   	 echo json_encode(array('status'=>'success'));
    		   	 }else{
    		   	     echo json_encode(array('status'=>'failed'));
    		   	}   
    		}else{
          echo json_encode(array('status'=>'exist'));
        }   
      }else{
        echo json_encode(array('status'=>'expire'));
      }
		}
	}
?>
