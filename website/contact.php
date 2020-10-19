<?php
    $to  = 'pgoror.h@gmail.com' . ' ';

    $subject = 'Letter from my website';

    $message = 'User' . $_POST['name'] . ' send you a letter:<br />' . $_POST['message'] . '<br />
    His/her email is <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
    ;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    $headers .= 'To: Iris <pgoror.h@gmail.com>' . "\r\n";
    $headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";

    mail($to, $subject, $message, $headers);
?>