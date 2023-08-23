<?php

if($_SERVER["REQUEST_METHOD"]=='POST') {
            echo $_POST["fname"].'<br>';
            echo $_POST["lname"].'<br>';
            echo $_POST["country"].'<br>';
    }

?>