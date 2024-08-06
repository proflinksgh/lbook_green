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
    		$cid = $db->cleanInput($cid);
    		$title = $db->cleanInput($title);
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
        $employer = $db->cleanInput($employer);
        $emptype = $db->cleanInput($emptype);
        $position = $db->cleanInput($position);
        $employertel = $db->cleanInput($employertel);
        $netsalary = $db->cleanInput($netsalary);
        $bdirection = $db->cleanInput($bdirection);
        $rdirection = $db->cleanInput($rdirection);
    		$currDate = date('Y-m-d H:i:s');
        $year=date("Y");
        $user = $_SESSION['id'];

     	 if(isset($_SESSION['id'])){
    	 if(isset($_POST["image"])){
         $image=$_POST["image"];
         $update_ = $db->updateFunction("UPDATE loanreg_tb SET image='$image', title='$title', surname='$surname', othername='$othername', phone='$phone', gender='$gender', dob='$dob', dependant='$dependant', idtype='$identification', idno='$idno', dateissue='$dateofissue', dateexpire='$expiry', busname='$namebusiness', address='$address', location='$location', btel='$telno', byears='$noofyears', empname='$employer', position='$position', empno='$employertel', netsal='$netsalary', bdirection='$bdirection', rdirection='$rdirection', date_modified='$currDate' WHERE id=$cid AND CCODE = ".$_COOKIE["ccode"]."");
        }else{
         $update_ = $db->updateFunction("UPDATE loanreg_tb SET title='$title', surname='$surname', othername='$othername', phone='$phone', gender='$gender', dob='$dob', dependant='$dependant', idtype='$identification', idno='$idno', dateissue='$dateofissue', dateexpire='$expiry', busname='$namebusiness', address='$address', location='$location', btel='$telno', byears='$noofyears', emptype=$emptype, empname='$employer', position='$position', empno='$employertel', netsal='$netsalary', bdirection='$bdirection', rdirection='$rdirection', date_modified='$currDate' WHERE id=$cid AND CCODE = ".$_COOKIE["ccode"]."");
        }

				if($update_=="0"){
					echo json_encode(array('status'=>'success', 'message'=>'User Updated succesfully'));
				}else{
				  echo json_encode(array('status'=>'failed', 'message'=>'Failed to Update succesfully! Try again'));
				}  
      }else{
        echo json_encode(array('status'=>'expire'));
      }
		}
	}
?>
