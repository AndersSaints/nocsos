<?php 
header("content-type: text/html;charset=utf-8");

$server = "eu-cdbr-west-03.cleardb.net";
$user = "b3b2d3e787b7a7";
$pass = "85be2a1c";
$database = "heroku_35df51f09fc0ef8";


// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "noc_sos";

// $conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>