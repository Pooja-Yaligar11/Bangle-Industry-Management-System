<?php
include('dbconnect.php');
$tp_id=$_POST['tp_id']; 
$transportation_id=$_POST['transportation_id'];
$given_amount=$_POST['given_amount'];
$given_date=$_POST['given_date'];
$description=$_POST['description'];

$sql="update transportation_payment set transportation_id='$transportation_id',given_amount='$given_amount',given_date='$given_date',description='$description' where transportation_payment_id='$tp_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="trans_payment_view.php";
</script>