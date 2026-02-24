<?php

$apiKey = urlencode('lnMe6FLd1aKu5js8zVAxI7tHJ3bYX4CQNmi02hO9UyBvDoEWgqIXWt8B2Z9GbmSdJQLrHAKieREvVU7F');
$numbers = "9876543210";
$sender = urlencode('TXTLCL');
$message = rawurlencode('Test SMS from Think New SMS');

$data = array(
'apikey'=>$apiKey,
'numbers'=>$numbers,
'message'=>$message,
'sender'=>$sender
);

$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>
