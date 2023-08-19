<!-- we can use html elemente in php file -->
<h1> <?php echo("Let's learn PHP!")?></h1>
<hr>

<?php
    // there are two ways to link 2 variable to each others
    
    # 1e =
    $name1 = "Jimin";
    $name2 = "Barka";

    $together = $name1." ".$name2 ;
    echo $together."<hr>";
    
    # 2e
    $name1 .= $name2;
    echo $name1;
?>


