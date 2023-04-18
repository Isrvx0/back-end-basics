<?php
    function greeting_message(){
        $timeOfDay = date("H:i a");
        if($timeOfDay >= '06:00'and $timeOfDay < '12:00'){
            $greeting = 'Good morning!<br> Het is nu '.$timeOfDay;
        }else if($timeOfDay >= '12:00'and $timeOfDay < '18:00'){
            $greeting = 'Good afternoon!<br> Het is nu '.$timeOfDay;
        }else if($timeOfDay >= '18:00'and $timeOfDay < '00:00'){
            $greeting = 'Good evening!<br> Het is nu '.$timeOfDay;
        }else if($timeOfDay >= '00:00'and $timeOfDay < '06:00'){
            $greeting = 'Good night!<br> Het is nu '. $timeOfDay;
        }
    return $greeting;
    } 

?>  
<!DOCTYPE html>
<html lang="en">
    <?php include('style.php'); ?>
    <body class="hello">
        <div class="centered">
            <h1> <?php echo greeting_message() ?> </h1>
        </div>
        </div>
    </body>
</html>