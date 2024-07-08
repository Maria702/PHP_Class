<!--  PHP Syntax -->
<!-- <?php ?> -->

<!-- The PHP echo Statement -->
 <?php  echo "hello" ?>
 <br>

<!-- Creating (Declaring) PHP Variables -->
<!-- a variable starts with the $ sign, -->


<!-- 
<?php 
$x = 5;
$y = "Hey! This is Maria";

echo $x;
echo "<br>";
echo $y;

?> -->


<?php
$x = "Tiktok Star ";
$y = "Maria ";
$z = "Waseem";

echo "This is " . $x . $y . $z;
echo "<br>";
echo "This is $y $z, a famous $x"
?>

<br>

<!--  Data Type
the data type of any object by using the var_dump() function. -->

<!-- 1 STRING -->
<?php
$name = "Sheikh Maria";
var_dump($name)
?>

<br>


<!-- 2 PHP Integer -->
<?php
$int = 12093;
$int_two = 29847 ;
var_dump("This is Integer number ===> " . "\n" . $int, $int_two); 

echo( "<br>" . $int . "\n" . $int_two)
?>
<br>


<!-- 3 PHP Float  A float (floating point number)  -->
 <?php
$float = 2.3454;
echo ("This is Floating Number ===>" .  "\n" .$float)
 ?>
 <br>


<!--4 PHP Boolean
A Boolean represents two possible states: TRUE or FALSE. -->
<?php
$bool = False;
var_dump($bool);
?>
<br>

<?php
$foo = true;
if ($foo) {
    echo "false";
} else "Wrong";

echo"<br>"
?>


<!-- 5 PHP Array
An array stores multiple values in one single variable. -->
<?php
$student = array("Maria", "Ria", "Kanwal", "Khan", "abc");
var_dump($student);
echo "<br>";
echo ($student[2])
?>
<br>

<!-- --------------------------------------STRING FUNCTION -->

<!-- String Length
The PHP strlen() function returns the length of a string. -->
<?php
$my_name = "MARIYA";
echo ("The Length of " . $my_name . " is "); 
echo strlen( "\n" . $my_name);
?>


<br>
<!-- Word Count
The PHP str_word_count() function counts the number of words in a string. -->
<?php
$myName =  "Sheikh Maria";
echo ("The Number of Word in " . $myName . " is ");
echo str_word_count($myName);
echo "<br>";


// STRING REVERSE
echo ("Reverse Your String ===> " );
echo strrev($myName);
?>

<br>

<!-- Search For Text Within a String
The PHP strpos() function searches for a specific text within a string. -->

<?php
$abc = "Maria is a good Girl";
echo strpos($abc, "good");
echo "<br>";
echo strpos($abc, "Maria");
echo "<br>"
?>

<!-- Upper Case
The strtoupper() function returns the string in upper case: -->
<?php
$define = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo strtoupper($define);
echo "<br>"
?>


<!-- Replace String
The PHP str_replace() function replaces some characters with some other characters in a string. -->
<?php
$rep = "Maria is a good Tiktoker!";
echo "<br>";
echo ($rep . " replace good ====> ");
echo str_replace("good" , "Best" , $rep);
echo "<br>";
?>

<!-- REPEAT
The str_repeat() function repeats a string a specified number of times. -->

<?php
$repeat = "MARIA IS THE BEST ";
echo str_repeat($repeat, 13);
echo "<br>"
?>

<!-- Remove Whitespace -->
 <!-- The trim() removes any whitespace from the beginning or  the end: -->
<?php
$space = " Hey! How are you? ";
echo($space);
echo "<br>";
echo trim($space)
?>













<br>

<?php
?>