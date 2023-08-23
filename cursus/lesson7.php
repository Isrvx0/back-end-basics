<?php

    /* IF STATEMENT IN PHP*/

    $number1 = 5;
    $number2 = 3;

    if($number1 >= $number2) {
        echo ("I love you! <hr>");
    } else if ($number1 == $number2) {
        echo ("I dont know!");
    } else {
        echo("I hate you! <hr>");
    }


    /* SWITCH STATEMENT IN PHP*/

    $number_one = 8;

    switch($number_one) {

        # if the situation is " ", do something!
        case 0:
            echo ("It's zero");
            break;
        case 1:
            echo ("It's one");
            break;
        case 2:
        case 3: ## if case (2&3) , echo this!.
            echo ("It's two & three");
            break;
        default: #else, (If all the other cases were not true)echo this!
            echo ("It's other number!<hr>");

    }


    /* FOR LOOP STATEMENT IN PHP*/
    $names = array("Jimin","Barka","Felix","Hyunjin");

    for ($x = 1; $x<= 7; $x++){
        # $x is the start value, as long $x smaller or equel to 5, add 1 to $xx
        echo ("<h3>".$x."</h3>");
    }

    for ($x = 0; $x< count($names); $x++){
        echo ("<h3>".$names[$x]."</h3>");
    }

    echo("<hr>");
    
    
    /* FOREACH STATEMENT IN PHP*/
    foreach( $names as $name ){
        echo ("<h2>".$name."</h2>");
    }
    echo("<hr>");


    /* WHILE LOOP STATEMENT IN PHP*/
    $start_number = 1;
        # How to use while loop in php:
    while( $start_number <= 5 ){
        echo ("<h4>".$start_number."</h4>");
        $start_number ++;
    }

        # How to use "do while" in php:
    do{
        echo ("<h4>".$start_number."</h4>");
        $start_number ++;
    } while ( $start_number <= 5 );




?>