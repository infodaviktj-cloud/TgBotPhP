<?php
$token = "7548974165:AAESQle_jQOVG7q_aoj1g0s8mQfhRDNiO9o";
$api = "https://api.telegram.org/bot$token/";

$update = json_decode(file_get_contents('php://input'), true);

$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

if($text == "/start"){
    file_get_contents($api . "sendMessage?chat_id=$chat_id&text=Salom! PHP bot ishlayapti 😎");
} else {
    file_get_contents($api . "sendMessage?chat_id=$chat_id&text=Sen yozding: $text");
}
?>
