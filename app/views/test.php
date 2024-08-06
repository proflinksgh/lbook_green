<?php
class amwork_controller extends route
{

	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $acc_type;
	private $user;
	private $pass;
	private $conn;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');

		$this->user_initing = $this->model('extend_function');

		$this->date_composer = $this->user_initing->timer;

		$this->conn = new master_class();
echo 'hii';
	}


?>