<?php 
header("content-type: text/html;charset=utf-8");

$server = "eu-cdbr-west-03.cleardb.net";
$user = "b8e19376ba7475";
$pass = "b52364be";
$database = "heroku_bd843db29bed348";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>