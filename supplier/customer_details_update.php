<?php
include('dbconnect.php');
$c_id=$_POST['c_id'];
$customer_id=$_POST['customer_id'];  
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$customer_code=$_POST['customer_code'];

$sql="update customer_details set customer_name='$customer_name',customer_address='$customer_address',customer_city='$customer_city',contact_no='$contact_no',email_id='$email_id',customer_code='$customer_code' where customer_id='$c_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="customer_details_view.php";
</script>