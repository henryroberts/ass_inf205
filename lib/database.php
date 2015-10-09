<?php
class database {
	const host = 'localhost';
	const user = 'root';
	const pass = '';
	const data = 'product_management';
	public $conn;
	public $result;
	public  function connect() {
		$this->conn = @mysql_connect(database::host,database::user, database::pass);
		if($this->conn){
			$dbSelect = @mysql_select_db(database::data,$this->conn);
			if($dbSelect) {
				@mysql_query('SET NAMES UTF8');
			}
		}
		else {
			echo 'không kết nối được tới database';
		}
	}
	public function query($sql){
		$this->freeQuery();
		$this->result = mysql_query($sql);
	}

	public function freeQuery(){

		if($this->result){
			@mysql_free_result($this->result);
		}
	}
	
	public function numRows(){

		if($this->result){
			$rows = mysql_num_rows($this->result);
			return $rows;
		}
	}

	public function fetch(){
		if($this->result) {
			$row = mysql_fetch_array($this->result);
			return $row;
		}
	}
}