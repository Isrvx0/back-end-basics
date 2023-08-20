<?php
    /* DATE IN PHP = */ 

        # We use it to tell php which country we want :
    date_default_timezone_set("Asia/Seoul");
        # It echo the date of today!
    $date = date("D/M/Y");
        # It echo the date of the giving date!
    //$date = date("D/M/Y", strtotime("20-04-2000") );
    
        # It gives what time it is!!
    $time = date("h:i:s");

    echo($date." ".$time)

?>