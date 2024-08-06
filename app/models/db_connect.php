<?php

class dbConnection{
		protected $db_conn;
		public $db_name= 'lbookfin_greendb';
		public $db_user='root';
		public $db_pass='sheikhmo2XB@00#*#*';
		public $db_host='localhost';

		function connect()
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