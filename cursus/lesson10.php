<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
               
        include 'file.php';
        //require 'file.php';
                # 'include || 'require' add files to the php page! 
                # different is : if happend an error, include will skip the error, require will stopt the whole next code
        
        

        //echo $_SERVER["REQUEST_METHOD"].'<br>';
                # we use it to know which server we are using.

        // echo $_GET["fname"].'<br>';
        // echo $_GET["lname"].'<br>';
        // echo $_GET["country"].'<br>';
                # It'll print for us the input of the user

                # to avoid getiing an error, we cam use 'if' statement:
        if($_SERVER["REQUEST_METHOD"]=='POST') {
            $fname = ""; $lname="";$country="";
            if (isset ($_POST["fname"])){
                #we use 'isset' to avoid getting error if there's two forms! so it will work only if there is a right input!

                $fname = strip_tags ($_POST["fname"]);
                    # We use 'strip_tags' to avoid hackers and unneeded inputs (1:42:00) => Removing HTML elements from a string

                // if (!preg_match("/^[A-Z][a-z]+$/",$fname)){
                //     $fname = "<span style=color:red>invalid input</span>";
                // }
            } if (isset($_POST["lname"])){
                $lname = strip_tags ($_POST["lname"]);
            } if (isset($_POST["country"])){
                $country = strip_tags ($_POST["country"]);
            } 
            $date = "$fname<br>$lname<br>$country<hr>";
            echo $date;
        }
        
    ?>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <!-- we use the action methode to tell the browser what to do if the user send the information -->
    <!-- <form method="post" action="lesson10.php"> -->    
        <div> 

            <h2> Welcome to my page </h2>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Name"><br>
            
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" placeholder="Last Name"><br>

            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="South Korea">South-Korea</option>
                <option value="Japan">Japan</option>
                <option value="China">China</option>
                <option value="Thailand">Thailand</option>
            </select>
            <br>
            
            <button> Submit </button>

        </div>
  
    </form>
</body>
</html>
