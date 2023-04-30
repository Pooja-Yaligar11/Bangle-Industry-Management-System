<?php
include('dbconnect.php');
$rpd_id=$_POST['rpd_id']; 
$raw_material_purchase_id=$_POST['raw_material_purchase_id'];
$raw_material_id=$_POST['raw_material_id'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$discount=$_POST['discount'];

$sql="update raw_material_purchase_details set raw_material_purchase_id='$raw_material_purchase_id',raw_material_id='$raw_material_id',quantity='$quantity',date='$date',discount='$discount' where raw_material_purchase_details_id='$rpd_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="raw_material_purchase_detail_view.php";
</script>