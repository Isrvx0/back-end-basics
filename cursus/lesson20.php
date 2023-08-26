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

                    #connecten to mysql in php.
                $connect = mysqli_connect($host, $user, $pass, $db);
                
                $insert = "insert into emp values(1,'jimin','South-Korea')";
                $update = "update emp set empname= 'Felix' where empno=1";
                $delete = "delete from emp where empno=1";

                $q= mysqli_query($connect,$delete);

                if ($q){
                    echo "OK!";
                }else{
                    echo mysqli_error($connect);

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