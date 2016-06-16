<meta charset="UTF8">

<?php

require('PHPMailer-master/PHPMailerAutoload.php');

if(isset($_POST["sender"])){             
	$sender=$_POST["sender"];
	$email=$_POST["email"];
	$receiver=$_POST["receiver"];
	$content=$_POST["content"];
}


$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mo850131@gmail.com';                 // SMTP username
$mail->Password = 'nukim2962481';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('mo850131@gmail.com', $sender);
$mail->addAddress($email, $receiver);     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'php期末報到A1033304';
$mail->Body    = $content;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>