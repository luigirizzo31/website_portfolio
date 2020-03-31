<?php

    if(isset($_POST['submit']))
    {
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //smtp settings
        $mail->isSMTP(); // send as HTML
        $mail->Host = "smtp.gmail.com"; // SMTP servers
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "luigirizzo.design@gmail.com"; // Your mail
        $mail->Password = ''; // Your password mail
        $mail->Port = 587; //specify SMTP Port
        $mail->SMTPSecure = 'tls';                               
        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('luigirizzo.design@gmail.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);
        $mail->isHTML(true);
        $mail->Subject='Form Submission:' .$_POST['subject'];
        $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h3>';
        
    }
?>