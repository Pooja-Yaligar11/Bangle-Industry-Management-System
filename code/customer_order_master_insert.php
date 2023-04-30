<?php
$customer_order_master_id=$_POST['customer_order_master_id'];  
$date=$_POST['date'];
$customer_id=$_POST['customer_id'];



include('dbconnect.php');

$sql="insert into customer_order_master  values(null,'$date','$customer_id')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Customer_order_master_form.php ";

</script>
