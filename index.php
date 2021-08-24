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



//is_string ( "Lucky Number 7" )

//strstr()
//The function strstr() can be used to find a string or character match within a longer string. This function can be used to find a string inside a string, including finding a string containing only a single character.

//constant 2 way by using define() function or by using CONST keyword for constant

// const a = 5;
// echo a;


    ?>
</body>
</html>