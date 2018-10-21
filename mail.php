<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "empoweringhandymen@gmail.com";
$pwd = "nssva123";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo "Thank You!";
?>
<?php
//date_default_timezone_set('Etc/UTC');
require("PHPMailer/class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug = 2;
//$mail->Debugoutput = 'html';
$mail->Username = $recipient;  // SMTP username
$mail->Password = $pwd; // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


$mail->From = $recipient;
$mail->FromName = "Handymen.co.nf";
$mail->AddAddress("sitanshu.kushwaha@live.com", "Sitanshu");
$mail->AddAddress("nishuladhe@gmail.com", "Nisha");
$mail->AddAddress("vinitmasrani@gmail.com", "Vinit");
$mail->Subject = $subject;
$mail->Body    = $formcontent;
$mail->AltBody = "we have been contacted by $email";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Thankyou for reaching out, We have received your mail!";
?>

