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




?>