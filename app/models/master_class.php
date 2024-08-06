<?php


class master_class 
{
	protected $session_name;
	public $priviledge;
	public $timer;
	public $dateOnly;
	public $timing;
		
	function __construct()
	{
		$db_connection = new dbConnection();
		$this->link =$db_connection->connect();
	
	    $this->timer = date('Y-m-d H:i:s');
	    $this->dateOnly = date('Y-m-d');
	    $this->timing = date('H:i:s');

		return $this->link;
	}



	function getDateVal($status)
	{
		if($status==1)
		{
			return $this->timer;
		}
		else if($status==2)
		{
			return $this->dateOnly;
		}
		else if($status==3)
		{
			return $this->timing;
		}
	}

	function aps_select_count_init_two($table,$unique_id1,$unique_id2,$params)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id1=? AND $unique_id2=?");
			$values = $params;
			$query->execute($values);
			$rowcount = $query->rowCount();
			return $rowcount;
		}

		function aps_insert($com,$params=[])
		{
			$query = $this->link->prepare($com);
			$values = $params;
			$query->execute($values);
			return $query->rowCount();

		}

		function aps_remove_data($com_delete,$id)
		{
			$query = $this->link->prepare($com_delete);
			$values = array($id);
			$query->execute($values);
			return $query->rowCount();

		}


		function aps_update_data($com_delete,$params)
		{
			$query = $this->link->prepare($com_delete);
			$values = $params;
			$query->execute($values);
			return $query->rowCount();

		}

		function aps_select_count_init($table,$unique_id1,$unique_id2,$params)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id1=? AND $unique_id2=?");
			$values = $params;
			$query->execute($values);
			$rowcount = $query->rowCount();
			return $rowcount;
		}

		function aps_select_count_init_three($table,$unique_id1,$unique_id2,$unique_id3,$params)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id1=? AND $unique_id2=? AND $unique_id3=?");
			$values = $params;
			$query->execute($values);
			$rowcount = $query->rowCount();
			return $rowcount;
		}



		function aps_select_count_init_four($table,$unique_id1,$unique_id2,$unique_id3,$unique_id4,$params)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id1=? AND $unique_id2=? AND $unique_id3=? AND $unique_id4=?");
			$values = $params;
			$query->execute($values);
			$rowcount = $query->rowCount();
			return $rowcount;
		}


		function aps_fetch_specific($table,$column,$unique_id,$params)
		{
			$query = $this->link->prepare("SELECT {$column} FROM {$table} WHERE $unique_id=?");
			$values = array($params);
			$query->execute($values);
			$rowcount = $query->rowCount();
			if($rowcount>0)
			{
				$result = $query->fetch();
				return $result[$column];
			}
			else
			{
				return 0;
			}	
		}

		function aps_select_all_init($table,$unique_id1,$unique_id2,$params,$others)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id1=? AND $unique_id2=? $others");
			$values = $params;
			$query->execute($values);
			$rowcount = $query->rowCount();
			if($rowcount>0)
			{
				return $query->fetchAll();
			}
			else
			{
				return 0;
			}
		}

		function aps_select_all_init_three($table,$unique_id1,$unique_id2,$unique_id3,$params,$others)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id1=? AND $unique_id2=? AND $unique_id3=? $others");
			$values = $params;
			$query->execute($values);
			$rowcount = $query->rowCount();
			if($rowcount>0)
			{
				return $query->fetchAll();
			}
			else
			{
				return 0;
			}
		}

		function aps_fetch_all($table,$unique_id,$params)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id=?");
			$values = array($params);
			$query->execute($values);
			$rowcount = $query->rowCount();
			if($rowcount>0)
			{
				return $query->fetchAll();
			}
			else
			{
				return 0;
			}
		}

		function aps_select_count($table,$unique_id,$params)
		{
			$query = $this->link->prepare("SELECT * FROM {$table} WHERE $unique_id=?");
			$values = array($params);
			$query->execute($values);
			$rowcount = $query->rowCount();
			return $rowcount;
		}

}