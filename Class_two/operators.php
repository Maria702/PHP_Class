<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo '<h1> Operators </h1>';
  echo '<h4> 1-Arithmetic operators </h4>';
  $a = 4;
  $b = 3;
  echo( "a = " . $a . "," . "\n" .  "b = ".  $b . "<br>");
  echo (" ==> Addition: a + b = ".$a + $b . "<br>");
  echo (" ==> Subtraction: a - b =" . $a - $b . "<br>");
  echo (" ==> Multiplication: a * b = " . $a*$b . "<br>");
  echo (" ==> Division: a / b = " . $a/$b . "<br>");
  echo (" ==> Modulus: Remainder of a divided by b: a%b = " . $a%$b . "<br>");
  echo (" ==> Exponentiation : Result of raising a to the b'th power = " . $a**$b . "<br>");


  echo '<h4> Assignment Operators </h4>';
//   Assignment operators are used with numeric values to write a value to a variable.
  $c = 10;
  echo (" C = " . $c . "<br>");
  $d  = $c;
  echo (" the value of D is equal to the value of C". $d . "<br>");
  $c += 10;
  echo ( "c = c + 10 , The result is : " . $c . "<br>");
  $c -= 10;
  echo('c = c - 10 , The result is : ' . $c . "<br>");
  $c /= 10;
  echo('c = c / 10 , The result is : ' . $c . "<br>");
  $c *= 10;
  echo('c = c * 10 , The result is : ' . $c . "<br>");
  $c %= 10;
  echo('c = c % 10 , The result is : ' . $c . "<br>");
  $c **= 10;
  echo('c = c **10 , The result is : ' . $c . "<br>");



echo '<h4> Comparison Operators </h4>';
// Comparison operators are used to compare two values (number or string): //

echo " <p> ============ (1) Equal to : 	x == y	: Returns true if x is equal to y" . "<br> </p>" ;
$x = 12;
$y = 12;
echo ("The value of x is $x and the value of y is $y <br>");
echo ("The result is ");
echo var_dump( $x == $y);

//example 2
echo '<p> Exapmle 2 </p>';
$x = 12;
$y = 13;
echo ("The value of x is $x and the value of y is $y <br>");
echo ("The result is ");
echo var_dump($x == $y);


echo '<p> ============(2) Not equal : $x != $y	Returns true if $x is not equal to $y <br></p>';
$x = 20;
$y = 54;
echo("The Value of X is $x and the value of Y is $y " . "<br>");
echo ("The result is ");
echo ($x != $y );
echo var_dump($x != $y);
 // example 2

echo '<p> Example 2 </p>';
$x = 20;
$y = 20;
echo("The Value of X is $x and the value of Y is $y " . "<br>");
echo ("The result is ");
echo ($x != $y );
echo var_dump($x != $y);

   


echo " <p> ============ (3) Identical : x === y	: Returns true if x is equal to y, and they are of the same type <br> </p>";
$x = "Maria";
$y = 23;
echo ("The value of X is $x and the value of Y is $y" . "<br>");
echo ("The result is ");
echo var_dump($x === $y);

    // example 2

echo '<p> Example 2 </p>';
$x = 10;
$y = 23;
echo ("The value of X is $x and the value of Y is $y" . "<br>");
echo ("The result is ");
echo var_dump($x === $y);

    // example 3

echo '<p> Example 3 </p>';
$x = 10;
$y = 10;
echo ("The value of X is $x and the value of Y is $y" . "<br>");
echo ("The result is ");
echo var_dump($x === $y);
    


echo '<p> ============(4) Not identical :  $x !== $y	Returns true if $x is not equal to $y, or they are not of the same type <br> </p>' ;
$x = 29;
$y = 29;
echo ("The value of X is $x and the value of Y is $y" . "<br>");
echo ("The result is ");
echo ($x!==$y);
echo var_dump($x!==$y);

    // Example 2
 echo '<p> Example 2 </p>';
 $x =20;
 $y = "maria";
 echo("The value of x is $x and the value of Y is $y " . "<br>");
 echo ("The result is ");
 echo($x!==$y);
 echo var_dump($x!==$y);



echo '<p> ============(5) 	Greater than:  $x > $y	Returns true if $x is greater than $y <br> </p>' ;
$x = 60;
$y = 20;
echo("The value of x is $x and the value of Y is $y " . "<br>");
echo ("The result is ");
echo ($x > $y);
echo var_dump($x > $y);

    // Example 2
    echo '<p> Example 2 </p>';
$x = 60;
$y = 200;
echo("The value of x is $x and the value of Y is $y " . "<br>");
echo ("The result is ");
echo ($x > $y);
echo var_dump($x > $y);


echo '<p> ============(6) Less Than	$x < $y	Returns true if $x is less than $y <br> </p>' ;
$x = 60;
$y = 100;
echo("The value of x is $x and the value of Y is $y " . "<br>");
echo ("The result is ");
echo ($x < $y);
echo var_dump($x < $y);

    // Example 2
    echo '<p> Example 2 </p>';
$x = 600;
$y = 200;
echo("The value of x is $x and the value of Y is $y " . "<br>");
echo ("The result is ");
echo ($x < $y);
echo var_dump($x < $y);



echo '<p> ============(7) Greater than or equal to :	$x >= $y	==> Returns true if $x is greater than or equal to $y <br> </p>';
$x = 90;
$y = 2;
echo ("The vale of X is $x And the value of Y is $y". "<br>");
echo ("The result is ");
echo($x >= $y);
echo var_dump($x >= $y);

  // Example 2
  echo '<p> Example 2 </p>';
$x = 90;
$y = 90;
echo ("The vale of X is $x And the value of Y is $y". "<br>");
echo ("The result is ");
echo($x >= $y);
echo var_dump($x >= $y);

  // Example 3
  echo '<p> Example 3 </p>';
$x = 9;
$y = 90;
echo ("The vale of X is $x And the value of Y is $y". "<br>");
echo ("The result is ");
echo($x >= $y);
echo var_dump($x >= $y);



echo '<p> ============(8) Less than or equal to :	$x <= $y ==>	Returns true if $x is less than or equal to $y <br>';
$x = 4;
$y = 10;
echo ("The vale of X is $x And the value of Y is $y". "<br>");
echo ("The result is ");
echo ($x <= $y);
echo var_dump($x <= $y);







    ?>
</body>
</html>