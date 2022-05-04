<?php 
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);

        // адрес отправителя
        $fromMail = 'temttestmail@gmail.com';
        $fromName = 'localhost';

        // Email принятия сообщений
        $emailTo = "temttestmail@gmail.com";
        $subject = 'Форма обратной связи на php';
        $subject .= '=?utf-8?b?' . base64_encode($subject) . '?=';
        $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
        $headers .= "From: " . $fromName . " <" . $fromMail . ">\r\n";
        
        $body = "Письмо \nИмя: $name\nТелефон: $phone\nE-mail: $email\nСообщение: $message";

        mail($emailTo, $subject, $body, $headers, '-f' . $fromMail);
    ?>