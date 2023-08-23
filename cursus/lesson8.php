<?php

            /* FUNCTIONS IN PHP*/
    
        # Function that just print a text :
    function sayIloveJimin(){
        echo ("<h3> I love you Jimin</h3>");
        echo ("<h3> I love you to the moon and back</h3>");
    };
    sayIloveJimin();
    echo "<hr>";
        # Function that have parameters and print it :
    function loveMessage( $name , $message){
        echo ("Hello $name , you've got a message:");
        echo ($message);
    }

    $send_message = "I LOVE YOU SO MUCH! TO THE MOON AND BACK!";
    loveMessage("jimin",$send_message);
    echo "<hr>";


    # Function that have a return :
    function sum($number1 , $number2) {
        $result = $number1 + $number2;
        return $result;
    }

    $testen = sum(19,25);
    echo ($testen)

?>