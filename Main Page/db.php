<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "banking_app";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("Cound not connect: ". mysqli_error($conn));
}

mysqli_select_db($conn, $dbname);

?>