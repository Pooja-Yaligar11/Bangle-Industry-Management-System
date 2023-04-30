<?php
$vendor_payment_id=$_POST['vendor_payment_id'];  
$vendor_id=$_POST['vendor_id'];
$amount=$_POST['amount'];
$narration=$_POST['narration'];
$date=$_POST['date'];


include('dbconnect.php');

$sql="insert into vendor_payment values(null,'$vendor_id','$amount','$narration','$date')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Vendor_payment_form.php";

</script>
