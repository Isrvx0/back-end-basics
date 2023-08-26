<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
        if (isset($_POST["btnset"])) {
            setcookie("user" , "Jimin"); //=> 'user' hier is the key, and the value is "Jimin"
        }
        if (isset($_POST["btnget"])){
            echo $_COOKIE["user"];
        }

        ?>
         <form method="post"> 
            <div>
                <h1> Cookie Form </h1>
                
                <button name="btnset">Set Cookie</button>
                <br>
                <button name="btnget">Get Cookie</button>
            </div>
        </form>  
</body>