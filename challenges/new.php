<h1>Cars Outlet</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars_outlet";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit();
}

$brand = $_GET['brand'];
$type = $_GET['type'];
$licence = $_GET['licence'];

$stmt = $conn->prepare("INSERT INTO `cars` (`id`,`brand`,`type`,``licence) VALUES (NULL, `$brand, `$type`, `$licence`);");
$stmt ->execute();
header(`Location: new.html`);