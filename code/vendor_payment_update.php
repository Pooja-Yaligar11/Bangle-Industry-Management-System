<?php
include('dbconnect.php');
$vp_id=$_POST['vp_id']; 
$vendor_payment_id=$_POST['vendor_payment_id'];  
$vendor_id=$_POST['vendor_id'];
$amount=$_POST['amount'];
$narration=$_POST['narration'];
$date=$_POST['date'];

$sql="update vendor_payment set vendor_id='$vendor_id',amount='$amount',narration='$narration',date='$date' where vendor_payment_id='$vp_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="vendor_payment_view.php";
</script>