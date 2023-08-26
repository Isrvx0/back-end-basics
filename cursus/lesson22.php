<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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

        <input type="text" id="txtSearch" placeholder="Search..">
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
        $(document).ready(function(){
            // keyup => as soon as you touch the keyboard
        $("#txtSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
                // took the value that you type it and made it lower case.
            $("#employee tr").filter(function() {
                // called the tr inside our table
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                // hier is making a filter => if it's > -1 , it will display.
                // so if what you type is in the table, will display, and if not , it will not be showing 
                });
                $("#employee tr:first").show();
            });
        });

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