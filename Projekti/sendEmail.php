<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->SMTPAuth=true;
  $mail->Username='elona.fetahu@student.uni-pr.edu';
  $mail->Password='ioipnphbvcbmyqdm';
  $mail->SMTPSecure='ssl';
  $mail->Port=465;

  $mail->setFrom('elona.fetahu@student.uni-pr.edu');

  $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);

  $mail->Name=$_POST["name"];
  $mail->Body=$_POST["message"];
  $mail->Subject=$_POST["subject"];
  
  $mail->send();

  echo
  "
  <script>
  alert('Sent Succesfully!');
  document.location.href='Contact.php'; 
  </script>
  ";
}
?>