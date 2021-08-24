<?php
class DBConnection{
	public $con;
    public function connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE) {
		$this->con = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);
		return $this->con;
    }
	function db_insert($table,$values, $columns=array()){
		if($table=="" || $values=="")return false;
		$columnstr=$valuestr="";
		if(count($columns)>0){
			$columnstr=implode(",", $columns);
			$columnstr="(".$columnstr.")";
		}
		foreach($values as $key=>$val){
			if($valuestr !=""){
				$valuestr.=", '".$this->con->real_escape_string($val)."'";
			}else{
				$valuestr="'".$this->con->real_escape_string($val)."'";
			}
		}
		$sql = "INSERT INTO ".$table." ".$columnstr." VALUES (".$valuestr.")";
		//echo $sql; //exit;
		if($this->con->query($sql)){
			return $this->con->insert_id;
		}else{
			return false;
		}
	}
	function db_multi_insert($table,$values, $columns=array()){
		if($table=="" || $values=="")return false;
		$columnstr="";
		if(count($columns)>0){
			$columnstr=implode(",", $columns);
			$columnstr="(".$columnstr.")";
		}
		$sql = "INSERT INTO ".$table." ".$columnstr." VALUES ";
		$valuesArr = array();
		foreach($values as $k=>$vald){
			$valuestr = '';
			foreach($vald as $key=>$val){
				if($valuestr !=""){
					$valuestr.=", '".$this->con->real_escape_string($val)."'";
				}else{
					$valuestr="'".$this->con->real_escape_string($val)."'";
				}
			}
			$valuesArr[] = '('.$valuestr.')';
		}
		$valuesData = implode(',',$valuesArr);
		$sql .= $valuesData;
		if($this->con->query($sql)){
			return $this->con->insert_id;
		}else{
			return false;
		}
	}
	function db_get_data($str){ 
		$rows=array();
		$result=$this->con->query($str);
		while($row=$result->fetch_assoc()){
			$rows[]=$row;
		}
		return $rows;
	}
	function db_get_Details($str){ 
		$row=array();
		$result=$this->con->query($str);
		$row=$result->fetch_assoc();
		return $row;
	}
	function db_update($table,$columns, $values, $condition=""){
		if($table=="" || $columns=="" || $values=="" || count($columns) != count($values)){
			return false;
		}
		$updatestr="";
		for($i=0;$i<count($columns);$i++){
			if($updatestr==""){
				$updatestr=" SET ".$columns[$i]." = '".$this->con->real_escape_string($values[$i])."'";
			}else{
				$updatestr.=" , ".$columns[$i]." = '".$this->con->real_escape_string($values[$i])."'";
			}
		}
		if($condition !=""){
			$condition=" WHERE ".$condition;
		}
		$sql = "UPDATE ".$table." ".$updatestr.$condition;
		//print $sql;
		if($this->con->query($sql)){
			return $this->con->affected_rows;
		}else{
			return false;
		}
	}
	function prepare_param($str){
		return $this->con->real_escape_string($str);
	}
	function db_delete($table,$condition=""){
		if($table=="")return false;
		if($condition !=""){
			$condition=" WHERE ".$condition;
		}
		$sql = "DELETE FROM ".$table." ".$condition;
		if($this->con->query($sql)){
			return $this->con->affected_rows;
		}else{
			return false;
		}
	}
	function db_exe_query($str){ 
		$result=$this->con->query($str);
		return $result;
	}
	function db_multi_update($table,$values, $columns=array()){
		if($table=="" || $values=="")return false;
		$columnstr="";
		if(count($columns)>0){
			$columnstr=implode(",", $columns);
			$columnstr="(".$columnstr.")";
		}
		$sql = "INSERT INTO ".$table." ".$columnstr." VALUES ";
		$valuesArr = array();
		foreach($values as $k=>$vald){
			$valuestr = '';
			foreach($vald as $key=>$val){
				if($valuestr !=""){
					$valuestr.=", '".$this->con->real_escape_string($val)."'";
				}else{
					$valuestr="'".$this->con->real_escape_string($val)."'";
				}
			}
			$valuesArr[] = '('.$valuestr.')';
		}
		$valuesData = implode(',',$valuesArr);
		$sql .= $valuesData;
		foreach($columns as $kv=>$value){
			if($kv != count($columns)-1){
				if($kv==0)
					$sql .= ' ON DUPLICATE KEY UPDATE '.$value.' = VALUES('.$value.'),';
				else
					$sql .= ' '.$value.' = VALUES('.$value.'),';				
			}else
				$sql .= ' '.$value.' = VALUES('.$value.')';
		}
		if($this->con->query($sql)){
			return $this->con->insert_id;
		}else{
			return false;
		}
	}
} 
?>