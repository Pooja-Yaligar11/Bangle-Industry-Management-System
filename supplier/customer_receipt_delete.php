<?php
include('dbconnect.php');
$cr_id=$_REQUEST['cr_id'];
$sql="delete from customer_receipts where customer_receipts_id='$cr_id' ";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="customer_receipt_view.php";
</script>