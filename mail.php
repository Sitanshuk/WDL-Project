<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "sitanshu.kushwaha@live.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo "Thank You!";
?>
<?php
require("PHPMailer/class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug = 2;
$mail->Username = "empoweringhandymen@gmail.com";  // SMTP username
$mail->Password = 'nssva123'; // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


$mail->From = "empoweringhandymen@gmail.com";
$mail->FromName = "Sitanshu";
$mail->AddAddress("sitanshu.kushwaha@live.com", "Josh Adams");
//                 // name is optional
$mail->AddReplyTo("sitanshu.kushwaha@live.com", "Information");

//$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
//$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = "This is the HTML message body in bold!";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>

