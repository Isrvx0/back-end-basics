<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
        
            session_start();
        
            if (isset($_POST["btnget"])) {
                $user = $_SESSION['user'];
                $pass = $_SESSION['pass']; 
                echo "<hr><h3>$user</h3><h3>$pass</h3><hr>";
            }

        ?>
         <form method="post"> 
            <button name="btnget"> Get login from Session </button>
        </form>  
</body>