<?php
  
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$customer_code=$_POST['customer_code'];
$pwd=$_POST['pwd'];

include('dbconnect.php');

$sql="insert into customer_details values(null,'$customer_name','$customer_address','$customer_city','$contact_no','$email_id','$customer_code')";
mysqli_query($conn,$sql);

$sql1="insert into login values('$customer_code','$pwd','user','What is your Email-id','$email_id','active')";
mysqli_query($conn,$sql1);


?>
<script language="javascript1.2">
alert('......Reg Successfull.....');
document.location="login.php";

</script>
