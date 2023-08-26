<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
        
            session_start();
            if (isset($_POST["btnlogin"])) {
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['pass'] = $_POST['pass'];
            } if (isset($_POST["btnget"])) {
                $user = $_SESSION['user'];
                $pass = $_SESSION['pass']; 
                echo "<hr><h3>$user</h3><h3>$pass</h3><hr>";
            }
            
            if (isset($_POST["p1"])) {
                header("location:page1.php");
            } if (isset($_POST["p2"])) {
                header("location:lesson2.php");
            } if (isset($_POST["p3"])) {
                header("location:lesson8.php");
            }


        ?>
         <form method="post"> 
            <div>
                <h1> Cookie Form </h1>
                
                <label for="user"> Username </label>
                <input type="text" id="user" name="user" placeholder="Username">
                <label for="user"> Password </label>
                <input type="text" id="pass" name="pass" placeholder="Password">
                <button name="btnlogin"> Login in Session </button>    

            </div>
            <br>
            <button name="btnget"> Get login from Session </button>
            <br>

            <button name="p1" style="width:90px">page 1</button>
            <button name="p2" style="width:90px">page 2</button>
            <button name="p3" style="width:90px">page 3</button>

        </form>  
</body>