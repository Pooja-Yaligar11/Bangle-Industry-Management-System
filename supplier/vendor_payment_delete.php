<?php
include('dbconnect.php');
$vp_id=$_REQUEST['vp_id'];
$sql="delete from vendor_payment  where vendor_payment_id='$vp_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="vendor_payment_view.php";
</script>