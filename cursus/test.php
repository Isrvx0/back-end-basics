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
                $db   = "information";

                    #connecten to mysql in php.
                $connect = mysqli_connect($host, $user, $pass, $db);
                
                $insert = "insert into user_data values('jimin','jimin@gmail.com','JiMin1234')";
                $update = "update user_data set user_email= 'jimin51@gmail.com' where user_name='jimin'";
                $delete = "delete from user_data where user_name='jimin'";;
                $qu = mysqli_query($connect, $delete);

                if ($qu) {
                    echo "Okay";
                } else {
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