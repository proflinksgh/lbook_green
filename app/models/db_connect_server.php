<?php

class db_connect_server{
		protected $db_conn;
		public $db_name= 'linkseng_eranda_db';
		public $db_user='linkseng_Prof';
		public $db_pass='_;pQlfF5g!7r';
		public $db_host='localhost';
		
		function connect_server()
		{
			try
			{
			$this->db_conn = new PDO("mysql:host=$this->db_host; dbname=$this->db_name; charset=utf8mb4",$this->db_user,$this->db_pass);
			$this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db_conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			return $this->db_conn;
			}
			catch (PDOException $err) {
				echo "harmless error message if the connection fails";
				$err->getMessage() . "<br/>";
				file_put_contents('PDOErrors.txt',$err,FILE_APPEND);
				die();	
			}
		}
	}
?>