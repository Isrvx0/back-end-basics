<?php
    $names = ['Barka','Jimin','Jhope','Jin','Jungkook','Namjoon','Yoongi','Taehyung'];
    $time = "The time is " . date("H:i:a");  //date("H:i:a");
    function greeting(){
        $timeOfDay = date('a');
        if($timeOfDay == 'am'){
            echo 'Good morning, welcome to our site<br>';
        }else{
            echo 'Good afternoon, welcome to our site<br>';
        }
    }
    greeting()
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('style.php'); ?>
    <body class="background_image">
        <?php echo"The time is " . date("H:i:a");?>
        <h1 class="greeting"> </h1>
        <h1> Names </h1>
        <ul class="<?= count($names) > 3 ? 'evening' : 'afternoon' ?>">
            <?php foreach($names as $name) { ?>
                <li><?= $name ?> </li> 
            <?php } ?>

    </body>
</html>