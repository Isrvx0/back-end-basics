<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
            // How to fix the erorrs by yourself! (error control operators)
                    # If you want to not display any error for the user, you can use "@".
                    # If you want to display the erorr for the user and tell him why there's an erorr, you need to use (or die())
            
                if (isset($_POST["btntest"])) {
                # if we're excepting an error in a web, we can use '@' to not get an error message on our website! 
                $user = @$_SESSION['user'] or die("No Session"); // If nothing going to happen or there's an erorr, stop/die everything(the code) by using "die()" , it will delete everything and only display the message between the ' "" '
                $file = @fopen("f.txt",'r');
            }


        ?>
         <form method="post"> 
            <div>
                <h1> Test Form </h1>
            
                <button name="btntest"> Click To Test </button>    
            </div>
            <br>
        </form>  
</body>