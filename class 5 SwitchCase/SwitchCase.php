<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1> Switch Case Statements in php  </h1> <br>';
    echo '<p> The switch statement is used to perform different actions based on different conditions.
         </p> <br>';
            // ----------------------------example 1
        $fav_color = 'red';
        switch ($fav_color) {
            case "Pink":
                echo "Your Fav color is Pink";
                break;
            case "Yellow":
                echo "Your Fav color is yellow";
                break;
            case "Red":
                echo "Your fav color is Red";
                break;
            default:
            echo "No color";
        } echo'<br>';

        // ---------------------------------- Example 2
        $fav_color = "blue";
        switch ($fav_color){
            case "pink":
                echo "Your Fav color is Pink";
                break;
            case "blue":
                echo "Your fav color is blue";
                break;
            case "black":
                echo "Your fav color is black";
                break;
            default:
            echo "No color";
        }
    ?> 

    <?php 
    echo '<p> 1 - Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.</p> <br>';
    $day = 16;
    switch ($day){
        case "1":
            echo "Today is Monday";
            break;
        case "2":
            echo "Today is Tuesday ";
            break;
        case "3":
            echo "Today is Wednesday";
            break;
        case "4":
            echo "Today is Thursday";
            break;
        case "5":
            echo "Today is Friday";
            break;
        case "6":
            echo "Today is Saturday";
            break;
        case "7":
            echo "Today is Sunday";
            break;
        default:
        echo "Invalid Number";
    }
    ?>


<?php
echo '<p> 2 - Write A Simple Calculator Program in PHP Using Switch Case </p> <br>';

$result = "Divide" ;

switch ($result) {
    case "Add":
        echo "Add number";
        break;
    case "Subs":
        echo "Subs num";
        break;
    case "Multiply":
        echo "Multiply num";
        break;
    case "Divide":
        echo "Divide Num";
        break;
    default:
    echo "error";
}


?>
</body>
</html>