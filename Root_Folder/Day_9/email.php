<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email</title>
</head>

<body>

  <?php 
  
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';
  
  // * PHPMailer is a LIBRARY that allows the user to easily handle 
  // * sending emails from PHP
  
  if(isset($_POST)){
    // Instantiation 
    $mail = new PHPMailer();

    //Server settings
    $mail->isSMTP();                                    // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                           // Enable SMTP authentication
    $mail->Username   = 'bbdgtl@gmail.com';             // SMTP username
    $mail->Password   = 'RockyJuneau40';                  // SMTP password
    $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                            // TCP port to connect to

    //Recipients
    $mail->setFrom('bbdgtl@gmail.com', 'Mailer');
    $mail->addAddress('bbdgtl@gmail.com', 'Joe User');   // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  }

  ?>

  <form action="" method="POST">
    <!-- <input type="text" name="msg_input"> -->
    <input type="submit" name="submitBTN">
  </form>

</body>

</html>