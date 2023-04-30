<?php
$bill_master_id=$_POST['bill_master_id'];  
$bill_date=$_POST['bill_date'];
$customer_id=$_POST['customer_id'];
$other_charges=$_POST['other_charges'];



include('dbconnect.php');

$sql="insert into bill_master  values(null,'$bill_date','$customer_id','$other_charges')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Bill_master_form.php";

</script>
