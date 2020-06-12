<?php
	class users{
		public $host="localhost";
		public $username="root";
		public $password="";
		public $db_name="mockt";
		public $conn;
		
		public function_construct()
		{
			new mysqli($this->host,$this->username,$this->password,$this->db_name);
			if(this->conn->connect_errno)
			{
				die("database connection failed".$this->conn->connect_errno);
			}
		}
	}
	new users;
?>