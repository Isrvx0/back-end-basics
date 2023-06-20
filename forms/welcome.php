<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulier </title>
    <style>
        html {
            color: white;
            font-size: medium;
            font-weight: bold;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
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
        
    </style>
</head>
<body>
    <div id="formulier">
    <h1> REGISTRATION FORM </h1>
        <form method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="name" value=""><br>
            <label for="lname">Email address:</label><br>
            <input type="text" id="lname" name="email" value="">
            <input type="submit" value="send">
        </form>
    </div>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function errorText ($error) {
            echo "<br/>Invalid ". $error ." format<br/>";
        };
        # Check if name and email fileds are empty
        if(empty($_POST['name']) && empty($_POST['email'])){
            echo " <br/> Please fill in the fields";
        } if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            errorText ("email");
        } if (ctype_alpha(str_replace(' ', '', $_POST['name'])) === false) {
            errorText ("name");
        }else{
            # $name= $_POST['name'];
            # $email= $_POST['email'];
            echo ("<h1>". 'De ingevulde gegevens zijn:' ."</h1>");
            echo ('Name is :     '. $_POST['name']. '<br/>');
            echo ('Email is :'   . $_POST['email']. '<br/>');
        }
    };
?>