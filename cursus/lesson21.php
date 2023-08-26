<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
    <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db   = "test";

        $connect = mysqli_connect($host, $user, $pass, $db);
        $result = mysqli_query($connect,"select * from emp");
    
    ?>

    <form method="post"> 
        <table> 
            <tr> 
                <th> Employee Number </th>
                <th> Employee Name </th>
                <th> Employee Address </th>
            </tr>
            <?php
                // it will return the first row of the array.
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>"; 
                    echo "<td>".$row['empno']."</td>";
                    echo "<td>".$row['empname']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "</tr>";
                };

            ?>
        </table>
    </form>  
         
</body>