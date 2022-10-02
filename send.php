<?php
    include 'config.php';
    
    session_start();
    date_default_timezone_set('Europe/lisbon');

    $message=$_POST['message'];
    $url = 'https://api.telegram.org/bot5796401981:AAE-Z1dKvxxXHU7E7C5IJjRyL0X0ktZF2iw/sendMessage?chat_id=@testingRobervaldo&text='.$message; 
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
    $return = curl_exec($curl);
    curl_close($curl);

    $user=$_SESSION["username"];
    $date=date('Y-m-d H:i:s');
    $sql = "INSERT INTO logs (user, created_at, message)
					VALUES ('$user', '$date', '$message')";
			$result = mysqli_query($conn, $sql);

    echo '<script>if (confirm("Your message has been sent!") == true) {   window.location.href = "https://telinfo.herokuapp.com/"; }</script>';
?>