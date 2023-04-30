<?php
include('dbconnect.php');
$pr_id=$_POST['pr_id']; 
$production_id=$_POST['production_id'];  
$product_id=$_POST['product_id'];
$total_production=$_POST['total_production'];
$description=$_POST['description'];
$production_date=$_POST['production_date'];


$sql="update production set product_id='$product_id',total_production='$total_production',description='$description',production_date='$production_date' where production_id='$pr_id' ";
mysql_query($sql);
?>
<script>
alert("values is updated...");
document.location="production_view.php";
</script>