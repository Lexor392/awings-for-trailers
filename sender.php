<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];

	$to = "lesha.goloborodko.computer2@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $name;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name
    Телефон: $phone"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<div class style='
font-family: "Bebas Neue";
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 40px;
text-align: center;
margin-top: 23px;
color: black;'>Спасибо. Ваша заявка была отправлена.
Ожидайте ответа.</div>