<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $company, $type, $name, $contact, $password, $role, $surname, $othername;

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
    		$surname = $db->cleanInput($surname);
    		$othername = $db->cleanInput($othername);
    		$contact = $db->cleanInput($contact);
    		$username = $db->cleanInput($username);
    		$password= $db->password($db->cleanInput($password));
    		$role= $db->cleanInput($role);
    		$company = "";
    		$type = "";
    		$currDate = date('Y-m-d H:i:s');

    	  if($db->get_data_here_value("SELECT ID FROM admin_tb WHERE USERNAME='$username' AND CCODE = ".$_COOKIE["ccode"]."","ID")>0){
	       	echo json_encode(array('status'=>'exist', 'message'=>'User Already Exist!'));	
		  }else{
		  	$result = $db->getAllData("SELECT COMPANY, BUSINESS from company_tb WHERE UNIQ = ".$_COOKIE["ccode"]." ORDER BY ID LIMIT 1");
			if($result!==0){
			foreach($result as $row)
	        {
	            $company = $row['COMPANY'];
	            $type = $row['BUSINESS'];
	        }
			$params = array($db->gencode(), $username,$password, $surname, $othername, $contact, $role, '1', $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
		    $query = "INSERT INTO admin_tb (CODE, USERNAME, PASSWORD, SURNAME, OTHERNAME, CONTACT, USER_ROLE, STATUS_ID, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
			$insert_contribution = $db->InsertRecords($query, $params);
    		 if($insert_contribution){
    		   	  echo json_encode(array('status'=>'success', 'message'=>'User created successfully!'));
		   	 }else{
		   	      echo json_encode(array('status'=>'failed', 'message'=>'Failed Creating User! Please try again'));
		   	 }
			}
		  }
		}
	}
?>