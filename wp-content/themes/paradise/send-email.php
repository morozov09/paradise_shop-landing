<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "paradaizsamara@yandex.ru"; // адрес электронной почты, на которую будут отправлены данные
  $subject = "Новая заявка на сайте paradise-samara.ru"; // тема письма
  
  $phone = $_POST['phone'];
  
  $body = "Номер телефона: $phone";
  
  mail($to, $subject, $body);
  
  header("HTTP/1.1 200 OK");
  exit();
}

?>