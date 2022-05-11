<?php
    //print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';

    if(trim($email) == '')
        $error = 'Введите ваш email';
    else if(strlen(trim($message)) < 10)
        $error = 'Сообщение должно содержать не менее 10 символов';

    if ($error) {
        echo($error);
        exit;
    }
    
    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение") . "?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail('v4deus@gmail.com', $subject, $message, $headers);

    header('Location: about.php');

?>