<?php

$apiKey = "YOUR_REAL_TEXTLOCAL_API_KEY";

$numbers = "919876543210";
$message = "Test SMS from Think News SMS";
$sender = "TXTLCL";

$data = array(
    'apikey' => $apiKey,
    'numbers' => $numbers,
    'message' => $message,
    'sender' => $sender
);

$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
