<?php
    echo '<p> If Else  </p> <br>';
    $a =45;
    $b = 40;
    if($a > 50){
        echo "A is equal to 50";
    }else{
        echo "A is not equal to 50";
    }
    echo '<br>';


    echo 'Exanple 2 ';
    echo '<br>';
    $x = 3;
    $y = 10;
    if($x === $y){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 3 ';
    echo '<br>';
    $x = 3;
    $y = 3;
    if($x === $y){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 4 ';
    echo '<br>';
    $x = 3;
    $y = 3;
    if($x === $y){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 5 ';
    echo '<br>';
    $x = 3;
    if($x <= 14){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 6 ';
    echo '<br>';
    $x = 3;
    if($x >= 14){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 7 ';
    echo '<br>';
    $x = 3;
    if($x !==  14){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 8 ';
    echo '<br>';
    $x = 3;
    if($x !==  3){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 9 ';
    echo '<br>';
    $x = "Ria";
    if($x ===  3){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


    echo 'Exanple 8 ';
    echo '<br>';
    $x = 3;
    if($x !== 3){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';

    
    echo 'Exanple 8 ';
    echo '<br>';
    $x = 3;
    if($x || 3){
        echo " both are same";
    } else {
        echo " not same";
    }
    echo '<br>';


// Create If else ladder using more than one elseif 
// Student MarkSheet


$marks = 79;

if($marks <= 100 && $marks >= 90 ){
    echo " Scored Top ";
} 
elseif ($marks <=90  && $marks>= 80) {
    echo " Scored A+";
}
elseif ($marks <=80 && $marks >=70) {
    echo " Scored A";
}
elseif ($marks <=70 && $marks >= 60) {
    echo " Scored B";
}
elseif ($marks <=60 && $marks >= 50) {
    echo " Scored D";
}
elseif ($marks <50) {
    echo " Fail";
}
else {
    echo "ok";
}
echo '<br>';



// Write a program to allow a driver to drive only when his age is greater than or equal to 25 and less than or equal to 65

$driver  = 5 ;
if ($driver == 25){
    echo "You are ready to drive a car";
} elseif ($driver >= 25 && $driver <= 65){
    echo " Allow to  Drive";
} elseif ($driver > 65){
    echo " You need to bed rest";  
} else{
    echo "You are not ready to drive a car";
}
echo '<br>';



/*  EXERCISE -
Write a program that determines 
whether a given number is positive or negative.
*/
$num = 2;
if($num > 1){
    echo "Number is Positive";
} else {
    echo "Number is Negative";
}
echo '<br>';



$num = -2;
if($num > 1){
    echo "Number is Positive";
} else {
    echo "Number is Negative";
}
echo '<br>';



/*
Write a program that checks if a number is even (2,4,6) or odd(1,3,5)
*/
$number = 3 ;
if ( $number %2 == 0){
    echo "The Number is Even";
}else{
    echo "The number is Odd";
}
echo '<br>';



/*
 Write a program that calculates the ticket price 
 based on age with the following conditions:
  age below 12 pay a ticket price of 5,
  age below 18 pay a ticket price of 10,
  age below 60 pay a ticket price of 20,
  age over 60 play a ticket price of 15.
*/

$age = 4 ;
if($age < 12){
    echo "Ticket price is 5";
} elseif ($age < 18 && $age > 12){
    echo "Ticket price is 10";
} elseif ($age <60 && $age > 18){
    echo "Ticket price is 20";
} elseif ($age > 60){
    echo "Ticket price is 10";
}
echo '<br>';


/*  Write a program that determines if a year is a leap year.
*/

$year = 2025;

if ($year % 4 === 0){
    echo "Leap Year";
} else {
    echo "Not a leap Year";
}
echo '<br>';



/*
Write a program that calculates a discount based on the purchase amount.
 Prices equal or over 100 discount have a discount of 20.
 Prices equal or over 50 have a discount of 10. Otherwise discount is 0
*/
$price = 60;
if($price >= 100 ){
    echo "Discount is 20";
} elseif ($price >= 50 ){
    echo "Discount is 10";
}
else{
    echo "Discount is 0";
}


?>