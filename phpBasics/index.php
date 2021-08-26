<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*_____________________________________________
     |                                             |
     |                                             |
     |             MINM CONCEPTS OF PHP            |
     |                                             |
     |_____________________________________________|
      */
    //// to get php info
    // phpinfo();
    ////to add line breaks i.eadd nl2br function then pass the string and add \r\n in between the lines.
    // . dot is concadination operator in php
    // echo nl2br("hiii \r\n this is spider");
    // echo "hiii <br> this is spider";




//Definition and Usage
// The define() function defines a constant.

// Constants are much like variables, except for the following differences:

// A constant's value cannot be changed after it is set
// Constant names do not need a leading dollar sign ($)
// Constants can be accessed regardless of scope
// Constant values can only be strings and numbers

// syntax
//define(name,value,case_insensitive)

// define("GREETING","Hello you! How are you today?");
// echo constant("GREETING");

// $age = 45;
// echo "my age is {$age}";

//or u can use it by concadinate operator
// echo "my age is". $age;

// bool value true print 1 and false print 0 and NULL print nothing

// $e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
// print_r($e);
// echo "<br>";
// The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).
//it works for both variable and array
// echo var_dump($e) . "<br>";

//array merge two array values
// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_merge($a1,$a2));

// assocoative array
// key value pair but key is user defined
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";

// $car["audi"] = "Oh yeahh so cool";
// print_r($car);
// echo "<br>";
// print($car["audi"] );

// foreach(arrayname as $key=> $value)

//associative array
// $car = array("expensive"=>array('audi','bmw','mercedese'),
//             "inexpensive"=>array('toyota','honda','tata'));
// print_r($car);
// echo '<br>';
// print_r($car['expensive']);
// echo '<br>';
// print_r($car['inexpensive']);

    /*_____________________________________________
     |                                             |
     |                                             |
     |         array_keys and array_values         |
     |    create an array and put those values     |
     |_____________________________________________|
      */
// $car = array("expensive"=>array('audi','bmw','mercedese'),
//             "inexpensive"=>array('toyota','honda','tata'));
// print_r(array_keys($car));
// echo '<br>';
// print_r(array_values($car));
// echo '<br>';
    /*_____________________________________________
     |                                             |
     |                                             |
     |             Important V V IMP               |
     |                                             |
     |_____________________________________________|
      */

// print(array_keys($car)[0]);
// echo '<br>';
// print(array_values($car)[0][0]);
// echo '<br>';

// //substr
// $blog = 'Your Blog is Excellent!';
// print(substr($blog, 0, 4));
// // returns 'Your'

// echo strlen("Super Cali Fragilistics Expy Ali Docious");
// 40


//str_replace
// $strings = array (
//     'You like to have a fun time',
//     'You are a really nice person',
//     'Would you like to have a cup of coffee?' 
// );

// $search = array (
//     'fun',
//     'time',
//     'person',
//     'coffee' 
// );
// $replace = array (
//     'excellent',
//     'adventure',
//     'individual',
//     'joe' 
// );

// $replaced = str_replace ( $search, $replace, $strings );

// print_r ( $replaced );

///////////////////////////////// ans
// Array
// (
// [0] => You like to have a excellent adventure
// [1] => You are a really nice individual
// [2] => Would you like to have a cup of joe?
// )



//$trimit = 'junk awesome stuff junk';

// $trimmed = trim ( $trimit, 'junk' );

// print_r ( $trimmed );

// awesome stuff 



//strtolower()

// function calm_down($string) {
// 	return strtolower ( $string );
// }
// $person = 'Angry people SHOUT!';
// echo calm_down ( $person );

// // angry people shout!



//is_string ( "Lucky Number 7" );
//strlen( "Lucky Number 7" );
// echo str_word_count("Hello world! this is malaya");

//strpos(string, searchvalue);
// echo strpos("I love php, I love php too!",   "php");
// echo ucwords("hello world"); // Hello World!

//strstr()
//The function strstr() can be used to find a string or character match within a longer string. This function can be used to find a string inside a string, including finding a string containing only a single character.

//constant 2 way by using define() function or by using CONST keyword for constant

// const a = 5;
// echo a;



// require will produce a fatal error (E_COMPILE_ERROR) and stop the script
// include will only produce a warning (E_WARNING) and the script will continue

// include "myfunction.php";
// require "myfunction.php";
// echo('hiiiiiiiiii');
// echo "<br>";
// print(add(5,6));



// math functions in php

// absolute value i.e abs
// echo(abs(6.7)."<br>");
// echo(abs(-7.7) . "<br>");

// ceil function rounds the fraction
// echo (ceil(3.3)."<br/>");// 4  
// echo (ceil(7.333)."<br/>");// 8  
// echo (ceil(-4.8)."<br/>");// -4  


// floor function rounds the fraction to lower one
// echo (floor(3.3)."<br/>");// 3  
// echo (floor(7.333)."<br/>");// 7  
// echo (floor(-4.8)."<br/>");// -5  

//sqrt square rrot
// echo (sqrt(16)."<br/>");// 4  
// echo (sqrt(25)."<br/>");// 5  
// echo (sqrt(7)."<br/>");// 2.6457513110646  



//The decbin() function converts decimal number into binary. It returns binary number as a string.
// echo (decbin(2)."<br/>");// 10  
// echo (decbin(10)."<br/>");// 1010  
// echo (decbin(22)."<br/>");// 10110  

//The dechex() function converts decimal number into hexadecimal. It returns hexadecimal representation of given number as a string.
// echo (dechex(2)."<br/>");// 2  
// echo (dechex(10)."<br/>");// a  
// echo (dechex(22)."<br/>");// 16  


//The decoct() function converts decimal number into octal. It returns octal representation of given number as a string.
// echo (decoct(2)."<br/>");// 2  
// echo (decoct(10)."<br/>");// 12  
// echo (decoct(22)."<br/>");// 26 

//The base_convert() function allows you to convert any base number to any base number. For example, you can convert hexadecimal number to binary, hexadecimal to octal, binary to octal, octal to hexadecimal, binary to decimal etc.
//echo (base_convert($n1,10,2)."<br/>");// 1010 

// Check whether a value is 'not-a-number':
// echo is_nan(200) . "<br>";

// The acos() function in PHP is used to find the arc cosine of a number in radians.
// We already have discussed about PHP | cos() Function. The acos() function is the complementary function of cos().
// echo is_nan(acos(1.01));

// echo round(2.4) . "<br>";


//array push
// $array = array("php", "laravel", "codeigniter");
 
//  //before adding new values 
//  echo "Before add the value:- ";
//  print_r($array); echo "<br>";
 
//  //add elements/values in array
//  array_push($array,"wordpress","bootstrap","html");
 
//  //after adding a new values
//  echo "After add the value:- ";
//  print_r($array);


//array pop
// $array = array("php", "laravel", "codeigniter");
//  //before remove elements array
//  echo "Before add the value:- ";
//  print_r($array); echo "<br>";
 
//  //remove elements from array
//  array_pop($array);
 
//  //after remove elements from array
//  echo "After add the value:- ";
 
//  print_r($array);

//array search
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);


//in array
// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// if (in_array("Glenn", $people))
//   {
//   echo "Match found";
//   }
// else
//   {
//   echo "Match not found";
//   }


//date function
// date(format, timestamp)
// echo date("d/m/Y");

// d - The day of the month (from 01 to 31)
// D - A textual representation of a day (three letters)
// j - The day of the month without leading zeros (1 to 31)
// l (lowercase 'L') - A full textual representation of a day
// N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
// S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
// w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
// z - The day of the year (from 0 through 365)
// W - The ISO-8601 week number of year (weeks starting on Monday)
// F - A full textual representation of a month (January through December)
// m - A numeric representation of a month (from 01 to 12)
// M - A short textual representation of a month (three letters)
// n - A numeric representation of a month, without leading zeros (1 to 12)
// t - The number of days in the given month
// L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
// o - The ISO-8601 year number
// Y - A four digit representation of a year
// y - A two digit representation of a year
// a - Lowercase am or pm
// A - Uppercase AM or PM
// B - Swatch Internet time (000 to 999)
// g - 12-hour format of an hour (1 to 12)
// G - 24-hour format of an hour (0 to 23)
// h - 12-hour format of an hour (01 to 12)
// H - 24-hour format of an hour (00 to 23)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds, with leading zeros (00 to 59)
// u - Microseconds (added in PHP 5.2.2)
// e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
// I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)







//random no

// echo(rand() . "<br>");
// echo(rand() . "<br>");

// echo(rand(10,100));

// echo(getrandmax());


// Tip: Use the arsort() function to sort an associative array in descending order, according to the value.

// Tip: Use the ksort(),arsort(), function to sort an associative array in ascending order, according to the key.

// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// asort($age);
// arr_sort($age);
// print_r($age);

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key


// echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));
//Oct 3, 1975 was on a Friday

//super globals in php
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION



// $GLOBALS
// $x = 75;
// $y = 25;
 
// function addition() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
 
// addition();
// echo $z;


//post


    ?>

<!-- HTML part of the form -->
    <!-- <form action="index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form> -->
    
    <?php


//The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

// This function returns true if the variable exists and is not NULL, otherwise it returns false.

// Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.

// Tip: A variable can be unset with the unset() function.
    //The PHP superglobals $_GET and $_POST are used to collect form-data.
    // if(isset($_POST) ){
        // echo $_POST['name' ].'  your form has submited sucessfully';
    // };

//$_POST annd $_GET receives the data from the form in the form of associative array in GET method data will be visible in the url
    /*_____________________________________________
     |                                             |
     |                                             |
     |             Important V V IMP               |
     |                                             |
     |_____________________________________________|
      */
// echo "<br>";
// print_r($_POST);
// echo "<br>";
// print_r([$_POST]);
// echo "<br>";
// print_r([[$_POST]]);

//like this-
// Array (  
//     [name] => malaya 
//     [email] => ms@gmail.com  )






//The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

// This function returns true if the variable exists and is not NULL, otherwise it returns false.

// Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.

// Tip: A variable can be unset with the unset() function.

//===================database part========================


// $servername = "localhost";
// $usename= "root";
// $password= "";
// $con = mysqli_connect($servername, $usename, $password);
// $str = "CREATE database spider_db";
// $result = mysqli_query($con,$str);
// var_dump($result);

// //if db already exist then it will throw the error
// if(!$result){
//     die("not created sucessful <br>".mysqli_error($con));
// }
// else{
//     print("unsucessful");
// }


//Here, die() function ends the script with a message "codeends here "
// die("code ends here");
// print("hello world");


// $site = "";
  
// // open url else die (exit)
// fopen($site, "r")
// or die("Unable to connect to given site.");

//===================================

$servername = "localhost";
$usename= "root";
$password= "";
$table ="spider_db";

$con = mysqli_connect($servername, $usename, $password,$table);

//it can be done by thus also
// $con = new mysqli($servername, $usename, $password,$table);

if($con){
    echo "connection sucessful";
}
else{
    echo " connection not sucessful";
}
    ?>
</body>
</html>