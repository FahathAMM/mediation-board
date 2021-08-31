<?php
$db_host    = 'localhost';
$db_user    = 'root';
$db_pass    = '';
$db_database  = 'asmeer';


$db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn  = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass);



// $localhost = "localhost";
// $username = "root";
// $password = "";
// $dbname = "stock";

// db connection
$connect = new mysqli($db_host, $db_user, $db_pass, $db_database);
// check connection
if ($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
