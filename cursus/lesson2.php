<?php
    /* cut something from the text :*/
    // We can use 'substr' to cut somthing from the text.
        # first parameter need to be the variable of the text, and the second and third one is an int.
        # the first int gives from which letter to start and the second int tells how many letters to print.
    
    $text1 = "Welcome to my hope world";
    $edited_text1 = substr($text1 ,11,7);

    echo($edited_text1."<hr>");


    /* How to replace something from the text : */

        # by this example we are replacing the letter 'e' with the letter 'Q'
    $text2 = "Welcome Jimin to my hope world! Im glad to see you";
    $edited_text2 = str_replace("e" , "Q" , $text2);
    // $edited_text2 = str_replace("Jimin" , "Barka" , $text2); -> we can also change a word
    //$edited_text2 = str_replace($text2 , $text1 , $text2); -> Also, we can change the whole text with another text.

    echo ($edited_text2);

?>