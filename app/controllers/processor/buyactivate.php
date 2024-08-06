<?php 
class amwork_controller extends route
{

	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $role;
	private $user;
	private $pass, $cordinate;
	private $surname;
	private $othername, $company;
	private $contractor_type, $id;
	private $conn;

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
		$this->activate();
	}
	

	function activate()
	{
		$db = $this->user_initing;
		echo json_encode(array("company"=>$db->company(), "email"=>$db->company_email(), "contact"=>$db->company_phone(), "product"=>"L-BOOK"));
	}
}
?>