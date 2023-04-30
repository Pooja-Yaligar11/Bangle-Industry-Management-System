<?php
$customer_id=$_POST['customer_id'];  
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$customer_code=$_POST['customer_code'];


include('dbconnect.php');

$sql="insert into customer_details values(null,'$customer_name','$customer_address','$customer_city','$contact_no','$email_id','$customer_code')";
mysqli_query($conn,$sql);

$sql1="insert into login values('$customer_code','$customer_code','user','Enter Your Contact No','$contact_no','Active')";
mysqli_query($conn,$sql1);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="customer_details_view.php";

</script>
