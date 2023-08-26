<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php

            if (isset($_POST["btntest"])) {
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db   = "test";
                
                $connect = mysqli_connect($host, $user, $pass, $db);
                if ($connect) {
                    echo "Connected";
                }else {
                    echo "Not Connected!";
                }
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