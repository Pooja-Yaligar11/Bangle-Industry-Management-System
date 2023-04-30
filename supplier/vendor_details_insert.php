<?php

$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address'];
$vendor_city=$_POST['vendor_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$vendor_code=$_POST['vendor_code'];
$gst_no=$_POST['gst_no'];

include('dbconnect.php');

$sql="insert into vendor_details values(null,'$vendor_name','$vendor_address','$vendor_city','$contact_no','$email_id','$vendor_code','$gst_no')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert('inserted');
document.location="Vendor_detail_form.php";

</script>
