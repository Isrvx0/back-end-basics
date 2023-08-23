<?php

    $number1 = 11;
    $number2 = 22;

    /* $GLOBALS IN PHP = */
    function func(){
            # We use $GLOBALS to use a varible outside the function into it. 
        echo $GLOBALS["number1"];
            # If we want to use an inside varible out the function, we write $GLOBALS before the name if the varible.
        $GLOBALS["number3"] = 33;
    }
    
    func();
    echo $number3;
    echo "<hr>";

    /* $_SERVERS IN PHP = */
        # It'll print the page that you're into it.
    echo $_SERVER['PHP_SELF'];
            # It'll print the servername that you're using it.
    echo $_SERVER['SERVER_NAME']


?>