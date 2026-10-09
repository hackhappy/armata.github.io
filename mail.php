<?php

$frm_name  = "AFG Lesson";
$recepient = "agragregra@ya.ru";
$sitename  = "Учебный: Armata Financical Group";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, "UTF-8");
$phone = htmlspecialchars(trim($_POST["phone"]), ENT_QUOTES, "UTF-8");
$formname = htmlspecialchars(trim($_POST["formname"]), ENT_QUOTES, "UTF-8");

$message = "
Форма: $formname <br>
Имя: $name <br>
Телефон: $phone
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
