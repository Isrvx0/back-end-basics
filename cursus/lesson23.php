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
        
        $num  = "";
        $name = "";
        $address = "";

        if (isset($_POST['no'])) {
            $num = $_POST['no'];
        } if (isset($_POST['name'])) {
            $name = $_POST['name'];
        } if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }


        $sqls = "";
        if (isset($_POST["btnadd"])){
            $sqls = "insert into emp values($num,'$name','$address')";
            mysqli_query($connect,$sqls);
            header("location: lesson23.php");
        }if (isset($_POST["btnedit"])){
            $sqls = "update emp set empname ='$name', address='$address' where empno=$num";
            mysqli_query($connect,$sqls);
            header("location: lesson23.php");
        }if (isset($_POST["btndel"])){
            $sqls = "delete from emp where empno=$num";
            mysqli_query($connect,$sqls);
            header("location: lesson23.php");

        }


    ?>

    <form method="post"> 
        <div>
            <label> Employee Number </label>
            <input type="text" id="no" name="no">
            <label> Employee Name </label>
            <input type="text" id="name" name="name">
            <label> Employee Address </label>
            <input type="text" id="address" name="address">
            <div style="margin:auto;padding:0">
                <button name="btnadd" style="width:100px"> Add </button>
                <button name="btnedit" style="width:100px"> Edit </button>
                <button name="btndel" style="width:100px"> Delete </button>
            </div>
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
        $("#txtSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#employee tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
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