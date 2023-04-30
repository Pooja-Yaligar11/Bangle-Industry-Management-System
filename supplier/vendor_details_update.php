<?php
include('dbconnect.php');
$v_id=$_POST['v_id']; 
$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address'];
$vendor_city=$_POST['vendor_city'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$vendor_code=$_POST['vendor_code'];
$gst_no=$_POST['gst_no'];

 $sql="update vendor_details  set vendor_name='$vendor_name',vendor_address='$vendor_address',vendor_city='$vendor_city',contact_no='$contact_no',email_id='$email_id',vendor_code='$vendor_code',gst_no='$gst_no' where vendor_id='$v_id' ";
mysql_query($sql);
?>
<script>
alert("values is updted...");
document.location="vendor_details_view.php";
</script>