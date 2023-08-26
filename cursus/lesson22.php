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
        <div>
            <label> Employee Number </label>
            <input type="text" id="no" name="no">
            <label> Employee Name </label>
            <input type="text" id="name" name="name">
            <label> Employee Address </label>
            <input type="text" id="address" name="address">
        </div>    
        <br><br>

        <table id="employee"> 
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
                }
            ?>
        </table>
    </form> 
    
    <script>
        var table = document.getElementById("employee");
        for (var x=1; x < table.rows.length; x++ ) {
            table.rows[x].onclick = function(){
                document.getElementById("no").value = this.cells[0].innerHTML;
                document.getElementById("name").value = this.cells[1].innerHTML;
                document.getElementById("address").value = this.cells[2].innerHTML;
            }

        }
    </script>    
         
</body>