<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Third Class' ?> </title>
</head>
<body>
    <?php 
    echo '<h4> Class 3 </h4>';
    echo '<h3> PHP Logical Operators </h3>';
    echo '<p> (1) And Operator	: $x and $y ==>	True if both $x and $y are true <br> </p>';
 
    $x = true;
    $y = true;
    echo ("The value of X is TRUE and the value of Y is TRUE" . '<br>');
    echo ("The result is :");
    echo ($x and $y);
    echo var_dump($x and $y);

    //example
   
    $x = 20;
    $y = 30;
    echo ("Example" . '<br>');
    if($x == $y){
        echo ('same');
    }else echo('Not Same');

    //Example 2
    echo '<p> Example 2 </p>';
    $x = true;
    $y = false;
    echo ("The value of X is TRUE  and the value of Y is FALSE" . '<br>');
    echo ("The result is :");
    echo ($x and $y);
    echo var_dump($x and $y);



    echo '<p> (2) Or :	$x or $y	==> True if either $x or $y is true <br> </p> ';
    $x = false ;
    $y = false ;
    echo ("The value of X is FALSE  and the value of Y is FALSE" . '<br>');
    echo ("The result is :");
    echo ( $x or $y);
    echo var_dump( $x or $y);

    //Example 2
    echo '<p> Example 2 </p>';
    $x = true ;
    $y = false ;
    echo ("The value of X is true  and the value of Y is false" . '<br>');
    echo ("The result is :");
    echo ( $x or $y);
    echo var_dump( $x or $y);




    echo '<p> (3) Xor Operator	: $x xor $y	 ==> True if either $x or $y is true, but not both  <br></p>';
    $x = true ;
    $y = true ;
    echo ("The value of X is true  and the value of Y is true" . '<br>');
    echo ("The result is :");
    echo ($x xor $y);
    echo var_dump($x xor $y);

    //example 2
    $x = true ;
    $y = false ;
    echo '<p> Example 2 </p>';
    echo ("The value of X is true  and the value of Y is false" . '<br>');
    echo ("The result is :");
    echo ($x xor $y);
    echo var_dump($x xor $y);


    echo '<p> (4) Not ==>	!$x	True if $x is not true</p> <br>';
    $x =true ;
    $y = false ;
    echo ("The value of X is true  and the value of Y is false" . '<br>');
    echo ("The result is :");
    echo ($x || $y);
    echo var_dump($x || $y);
   
    ?>

    
</body>
</html>