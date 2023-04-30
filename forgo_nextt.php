<?php
include('dbconnect.php');
$customer_code=$_POST['customer_code'];

 $sql="select * from  customer_details where customer_code='$customer_code'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$email_id=$row['email_id'];

$sql1="select * from login where username='$customer_code'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);

$use_rname=$row1['username'];
$password=$row1['password'];


require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vtcprojectdemo@gmail.com';                 // SMTP username
$mail->Password = 'poornima711';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('vtcprojectdemo@gmail.com', 'Mailer');
 $mail->addAddress($email_id, 'Bangles');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot Password ';
$mail->Body    = '<div style="background-color:#FFFF99; font-size:36px;" align="center">Username : '.$use_rname.'<br><b style="font-size:36px; "> Password :'. $password .'</b></div>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>

<script>
alert('Your Username and Password Sent To Your Email Address');
document.location="login.php";
</script>
<?php
}
else

{
?>
<script>
alert('Invalied Emailid ..');
history.back();
</script>
<?php
}
?>