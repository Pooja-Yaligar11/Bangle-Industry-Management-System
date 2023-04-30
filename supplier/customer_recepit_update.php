
<?php
include('dbconnect.php');
$cr_id=$_POST['cr_id']; 
$customer_receipts_id=$_POST['customer_receipts_id'];  
$customer_id=$_POST['customer_id'];
$amount=$_POST['amount'];
$narration=$_POST['narration'];
$Date=$_POST['date'];

$sql="update customer_receipts set customer_id='$customer_id',amount='$amount',narration='$narration',date='$date' where customer_receipts_id='$cr_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="customer_receipt_view.php";
</script>