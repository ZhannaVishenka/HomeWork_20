<?php
// несколько получателей
$to  = 'zhanna.verkiienko@gmail.com' . ', ';  // обратите внимание на запятую
$to .= 'z.verkiienko@c-job.com.ua';

// тема письма
$subject = 'Email from my website';

// текст письма
$message = 'User' . $_POST['name'] . ' sent you a letter:<br />' . $_POST['message'] . '<br />
You can contact him by email. <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Ivan <Ivan@example.com>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>
