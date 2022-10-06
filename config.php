<?php 
header("content-type: text/html;charset=utf-8");

$server = "eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$user = "wvs884n8xn083q1p";
$pass = "baxihf8lv3ft9elt";
$database = "rpcm62bzjpvgz89r";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>