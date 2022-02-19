<?php
    $to = "order@salesgenerator.pro";
    $fromMail = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $headers = "From: $fromMail" . "\r\n" . "Reply-To: $fromMail" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    if(mail($to, $fromMail, $phone, $headers)){
        echo 'письмо отправленно';
    } else {
        echo 'ERROR';
    };
    ?>