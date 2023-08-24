<?php

if($_SERVER["REQUEST_METHOD"]=='POST') {
    $name = "";
    if (isset($_POST["name"])) {
        $name =$_POST["name"].'<br>';
    }
    echo "<h1> Hi $name </h1>";
    }
?>

<form method="post">    
    <div> 
        <label for="name">First name:</label><br>
        <input type="text" name="name" placeholder="Name"><br>
        <button> Submit </button>
    </div>
</form>