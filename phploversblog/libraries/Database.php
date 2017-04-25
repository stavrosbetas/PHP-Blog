<?php
	class Database{
		public $host = DB_HOST;
		public $username = DB_USER;
		public $password = DB_PASS;
		public $db_name = DB_NAME;

		public $link;
		public $error;


		/*
		*	Class Constructor
		*/


		public function __construct(){

			// Call Connect Function
			$this->connect();
		}

		/*
		* Connector
		*/

		private function connect(){
			$this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);

			if(!$this->link){
				$this->error = 'Connection Failed: ' . $this->link->connect_error;
				return false;
			}
		}

		/*
		* Select Method  select() function fetch all the data from users table.
		*/
		public function select($query){
			$result = $this->link->query($query) or die($this->link->error.__LINE__);
			if($result->num_rows > 0){
				return $result;

			}else
				return false;
		}

		/*
		* Insert  insert() function have some parameters like $fname , $lname and $city which accepts input values from html form.
		*/

		public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);

			// Validate insert
			if($insert_row){
				header("Location:index.php?msg=".urlencode('Record Added'));
				exit();
			}else{
				die('Error : ('. $this->link->erno . ') ' . $this->link->error);
			}


		}


		/*
		* Update   update() : this function have four parameters with table name and table fields value.

		*/

		public function update($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);

			// Validate insert
			if($update_row){
				header("Location:index.php?msg=".urlencode('Record Updated'));
				exit();
			}else{
				die('Error : ('. $this->link->erno . ') ' . $this->link->error);
			}


		}

		/*
		* Delete  delete() : function with $table and $id which is for MySql Delete Query.
		*/

		public function delete($query){
			$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);

			// Validate insert
			if($delete_row){
				header("Location:index.php?msg=".urlencode('Record Updated'));
				exit();
			}else{
				die('Error : ('. $this->link->erno . ') ' . $this->link->error);
			}


		}










}
