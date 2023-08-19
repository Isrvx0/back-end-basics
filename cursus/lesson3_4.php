<h2>Lesson 3 ==> Operators in PHP </h2>
<?php
/* LESSON 3: */
    /* Operators in PHP: */
    # How to add text to a text :
    $text1 = "A";
    $text1 .= "B" ;
    $text1 .= "C";
    echo ($text1);

    # How to add number tp numbers
    $num = 5;
    $num += 7;
    $num -= 2;
    $num *= 2;
    $num /= 4;
    echo ($num)."<hr>";
?>

<h2>Lesson 4 ==> Comparison in PHP </h2>
<?php
    /* LESSON 4: */
    /* comparison in PHP: */
    
    # to print 'false/true' we can use {var_export} :
        //echo (var_export(false));

    $number1 = 5;
    $number2 = 6;
    $comparison1 = $number1 < $number2;
    echo (var_export($comparison1)."<hr>");

    # The 'and &&' statement in PHP :
        // It will retun false, also if 3 are true and only one is false.
    $comparison2 = true && false && true;
    echo (var_export($comparison2)."<hr>");

    # The 'or ||' statement in PHP :
            // It will retun ture, also if 3 are false and only one is tue.
    $comparison3 = false || false || true;
    echo (var_export($comparison3)."<hr>");
?>