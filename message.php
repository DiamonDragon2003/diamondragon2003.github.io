<?php
$message = "Это простое сообщение!";
$to = "andrey.bober.2003@mail.ru";
$from = "andrey96bober@gmail.com";
$subject = "Тема сообщения";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\n Reply-to: $from\r\n Content-type: text/plain charset=utf-8\r\n";
mail ($to, $subject, $message, $headers);
?>
