<?php
$customer_receipts_id=$_POST['customer_receipts_id'];  
$customer_id=$_POST['customer_id'];
$amount=$_POST['amount'];
$narration=$_POST['narration'];
$Date=$_POST['date'];


include('dbconnect.php');

$sql="insert into customer_receipts values(null,'$customer_id','$amount','$narration','$Date')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Customer_receipt_form.php";

</script>
