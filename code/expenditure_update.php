<?php
include('dbconnect.php');
$ex_id=$_POST['ex_id']; 
$expenditure_id=$_POST['expenditure_id'];  
$expenditure_name=$_POST['expenditure_name'];
$description=$_POST['description'];
$total_amount=$_POST['total_amount'];
$given_to=$_POST['given_to'];
$voucher_no=$_POST['voucher_no'];
$given_date=$_POST['given_date'];

$sql="update expenditure set expenditure_name='$expenditure_name',description='$description',total_amount='$total_amount',given_to='$given_to',voucher_no='$voucher_no',given_date='$given_date' where expenditure_id='$ex_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="expenditure_view.php";
</script>