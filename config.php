<?php 
header("content-type: text/html;charset=utf-8");

$server = "ec2-34-247-72-29.eu-west-1.compute.amazonaws.com";
$user = "wvaokxafzjzzfg";
$pass = "af38436f20dfed221790a937adca9fa830c56324f6701c77f4f82daa642955d7";
$database = "d6vk8d75848bo5";


// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "noc_sos";

// $conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>