<?php

if (!empty($_POST)) {

    $message = "Вам пришло новое сообщение с сайта: \n"
    . "Имя отправителя: " . $_POST['name'] . "\n"
    . "Email Отправителя: " . $_POST['email'] . "\n"
    . "Сообщение отправителя: \n " . $_POST['text'];

    $resultMail = mail("kutetsky93@gmail.com", "Заявка с сайта", $message);

    if($resultMail) {
        echo "Заявка отправлена!";
    } else {
        echo "Что то пошло не так. Письмо не отправлено";
    }
}

?>