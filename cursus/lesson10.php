<!DOCTYPE html>
<html>
<body>

    <?php


        # REQUEST and POST do the same thing and bring to you the input date!
        # 
                # we use it to know which server we are using.
        //echo $_SERVER["REQUEST_METHOD"].'<br>';
        
                # It'll print for us the input of the user
        // echo $_GET["fname"].'<br>';
        // echo $_GET["lname"].'<br>';
        // echo $_GET["country"].'<br>';

                # to avoid getiing an error, we cam use 'if' statement:
        if($_SERVER["REQUEST_METHOD"]=='POST') {
            echo $_POST["fname"].'<br>';
            echo $_POST["lname"].'<br>';
            echo $_POST["country"].'<br>';
        }
        
    ?>
    <!-- we use the action methode to tell the browser what to do if the user send the information -->
    <!-- <form method="post" action="lesson10.php"> -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        
        <div> 

            <h2> Welcome to my page </h2>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>

            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="southKorea">South-Korea</option>
                <option value="japan">Japan</option>
                <option value="china">China</option>
                <option value="thailand">Thailand</option>
            </select>
            <br>
            <button> Submit </button>

        </div>
  
    </form>
</body>
</html>
