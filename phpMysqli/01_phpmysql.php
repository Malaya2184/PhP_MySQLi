<?php
$servername = "localhost";
$usename= "root";
$password= "";
$table ="spider_db";

// $con = mysqli_connect($servername, $usename, $password,$table);

//it can be done by thus also
$con = new mysqli($servername, $usename, $password,$table);

// if($con){
//     echo "connection sucessful";
// }
// else{
//     echo " connection not sucessful";
// }

// insert in to the emp table

$str = "INSERT INTO `employee` (`id`, `first_name`, `last_name`, `job_title`, `salary`, `notes`) VALUES (NULL, 'malaya', 'swain', 'developer', '100000', NULL);";

// $result = mysqli_query($con, $str);

//this can be done by this when there is is mysqli object
// $result = $con->query($str);


print($result);


?>