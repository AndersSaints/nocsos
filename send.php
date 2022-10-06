<?php

    include 'config.php';
    
    session_start();
    date_default_timezone_set('Europe/lisbon');


    $message=$_POST['message'];
    $post = [
        'chat_id' => '-680924998',
        'text' => $message
    ];
    // $url = 'https://api.telegram.org/bot5796401981:AAE-Z1dKvxxXHU7E7C5IJjRyL0X0ktZF2iw/sendMessage'; 
    $url = 'https://api.telegram.org/bot5007431892:AAHtHBSrRjYcTLT8s4AHi9HI5vi00lspUsk/sendMessage'; 
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    $return = curl_exec($curl);
    curl_close($curl);

    $user=$_SESSION["username"];
    $date=date('Y-m-d H:i:s');
    $sql = "INSERT INTO logs (user, created_at, message)
					VALUES ('$user', '$date', '$message')";
			$result = mysqli_query($conn, $sql);

    echo '<script>if (confirm("Your message has been sent!") == true) {   window.location.href = " welcome.php"; }</script>';
?>