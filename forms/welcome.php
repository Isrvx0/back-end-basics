<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulier </title>
    <style>
        
        body {
            padding: 5%;
            align-items: center;
            background-image: linear-gradient(to right,rgb(222, 187, 255), white);
        }
        input[type=text] {
            color: white;
            width: 100%;
            background-color: #d39ff4;
            padding: 12px 20px;
            border: 2px solid white ;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            padding: 4px 20px;
            margin: 20px 5px;
            color:blueviolet;
            background-color: white;
        }
        label {
            color: white;
            font-weight: bold;
            text-align: left;
            font-size: large;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        #formulier h1 {
            text-align: center;
            background-color: white;
            color: blueviolet;
            font-family:'Times New Roman', Times, serif;
        }
        #formulier {
            border: 5px solid white;
            width: 100%;
            padding: 5px;
            background-color: #e6c1fd;
        }
        .error {
            color: red;
            font-size: 15px;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
<?php
    $requiredName = $requiredEmail = "*";
    $invalidName = $invalidEmail = "";
    $filled_information = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        # Check if name and email fileds are empty or invalid
        if(empty($_POST['email'])){
            $requiredEmail = "Email is required!";
        } if (empty($_POST['name'])) {
            $requiredName = "Name is required!";
        } if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $invalidEmail = "Email is Invalid!</br>";
        } if (ctype_alpha(str_replace(' ', '', $_POST['name'])) === false) {
            $invalidName = "Name is Invalid!</br>";
        }else{
            # $name= $_POST['name'];
            # $email= $_POST['email'];
            $filled_information = "<h2> De ingevulde gegevens zijn: </h2> <br/> Name is : ". $_POST['name']. "<br/>Email address is : ". $_POST['email'];
        }
            };
        ?>
    <div id="formulier">
        <h1> REGISTRATION FORM </h1>
        <form method="post">
            <label for="fname">First name:
                <span class="error"><?php echo $requiredName;?></span>
            </label><br>
            <input type="text" id="fname" name="name" value=""><br>
            <span class="error"><?php echo $invalidName;?></span>

            <label for="lname">Email address:
                <span class="error"><?php echo $requiredEmail;?></span>
            </label><br>
            <input type="text" id="lname" name="email" value="">
            <span class="error"><?php echo $invalidEmail;?></span>

            <input type="submit" value="send">
        </form>
        <?php 
        echo $filled_information.'<br/>';
        ?>

    </div>
</body>
</html>

