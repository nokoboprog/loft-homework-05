<?php

require_once '../vendor/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('forswiftmailer2020@mail.ru')
    ->setPassword('forswift1978');

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Выполняю задание #5.1'))
    ->setFrom(['forswiftmailer2020@mail.ru' => 'forswiftmailer2020@mail.ru'])
    ->setTo(['forswiftmailer2020@mail.ru'])
    ->setBody('Привет! Это тестовое письмо.');

$result = $mailer->send($message);
if ($result) {
    echo 'Письмо успешно отправлено!';
} else {
    echo 'Письмо НЕ отправлено!';
}
