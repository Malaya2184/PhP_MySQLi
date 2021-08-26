<?php
// creation of a db class with some useful methods
// php mysql with object oriented
class DBConnection{


    // to connect the mysqli database by using mysqli class
    public function connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE) {
		$this->con = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);
		return $this->con;
    }



// this function will insert in the db table for single insert only
// here columns array must be array of strings
// but values array can be multiple data types or single data type
    function db_insert($table, $columns=array(),$values=array()){
      if($table=="" || $values=="")return false;
      $columnstr=$valuestr="";
      if(count($columns)>0){
        $columnstr=implode(",", $columns);
        $columnstr="(".$columnstr.")";
      }
      foreach($values as $key=>$val){
        if($valuestr !=""){
          // .=  means add to prev
          $valuestr.=", '".$this->con->real_escape_string($val)."'";
        }else{
          $valuestr="'".$this->con->real_escape_string($val)."'";
        }
      }
      $sql = "INSERT INTO ".$table." ".$columnstr." VALUES (".$valuestr.")";
      //echo $sql; //exit;
      if($this->con->query($sql)){
        
        // In this line we will get the last inserted id  of the last updated table
        //only we have to call the variable of mysqli object
        return $this->con->insert_id;
      }else{
        return false;
      }
    }

    //for multi insert
    //here values must be in the form of array of arrays
    function db_multi_insert($table, $columns=array(),$values){
      if($table=="" || $values=="")return false;
      $columnstr="";
      if(count($columns)>0){
        //add comma after each value in tghe column array
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

      // print $sql;

      // In this line we will get the first inserted id  of the last updated table
      if($this->con->query($sql)){
        return $this->con->insert_id;
      }else{
        return false;
      }
    }

    function db_multi_insert2($table, $columns=array(),$values){

    }


    // function to only execute the query
    function db_exe_query($str){ 
      $result=$this->con->query($str);
      return $result;
    }


//here both db_get_data and db_get_data2 will give the same result

    // to get multiple data
    function db_get_data($str){ 
      $rows=array();
      $result=$this->con->query($str);
      while($row=$result->fetch_assoc()){
        //this line behaves as array_pop
        $rows[]=$row;
      }
      return $rows;
    }
    //// to get multiple data
    function db_get_data2($str){ 
      $rows=array();
      $result=$this->con->query($str);
      //only returns the associate array now MYSQLI_ROW type
      $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
      // print_r($rows);
      return $rows;
    }




    //to get single data
    function db_get_Details($str){ 
      $row=array();
      $result=$this->con->query($str);

      // print(gettype($result));
      // var_dump($result);
      // Object ( [current_field] => 0 [field_count] => 6 [lengths] => [num_rows] => 13 [type] => 0 )

      //Fetch a result row as an associative array:
      $row=$result->fetch_assoc();
      return $row;
    }


}



//====================================================================================================================================

//program started
$servername = "localhost";
$usename= "root";
$password= "";
$table ="spider_db";
$dbcon = new DbConnection();
//here connection established
$dbcon_result = $dbcon->connect($servername, $usename, $password,$table);
// print_r($dbcon_result);

// if($dbcon_result){
//   print_r("connection sucessful");
// }
// else{
//   print_r("connection unsucessful");
// }

// or

//this line means if there is a connection error then orint the error and exit the script. Which is similar to die() function
if ($dbcon_result -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// $table_name = "employee";
// $table_columns = array("id", "first_name", "last_name", "job_title", "salary", "notes");
// $table_values = array(NULL, 'gunu', 'swain', 'developer', '100000', NULL);

// $result = $dbcon->db_insert($table_name,$table_columns,$table_values);
// print($result);




// $table_name = "employee";
// $table_columns = array("id", "first_name", "last_name", "job_title", "salary", "notes");

// values array must be array of arrayes
// $table_values = array(array(NULL, 'gunu', 'swain', 'developer', '100000', NULL),
//                       array(NULL, 'runu', 'swain', 'developer', '100000', NULL),
//                       array(NULL, 'tunu', 'swain', 'developer', '100000', NULL),
//                       array(NULL, 'munu', 'swain', 'developer', '100000', NULL),
//                       array(NULL, 'cunu', 'swain', 'developer', '100000', NULL)
//                       );

// $result = $dbcon->db_multi_insert($table_name,$table_columns,$table_values);
// print($result);

$str = "SELECT * FROM employee";
$dbcon->db_get_Details($str);
$data= $dbcon->db_get_data2($str);
print_r($data);
?>