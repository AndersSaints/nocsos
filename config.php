<?php 
header("content-type: text/html;charset=utf-8");

$server = "j5zntocs2dn6c3fj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$user = "qsdtqn8cefen1rju";
$pass = "hylgp1n1yiwcwoj3";
$database = "sx2h0n0tr55eul2e";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>