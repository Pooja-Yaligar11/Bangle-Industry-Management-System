<?php
include('dbconnect.php');
$rp_id=$_POST['rp_id']; 
$vendor_id=$_POST['vendor_id'];
$date=$_POST['date'];


$sql="update raw_material_purchase  set vendor_id='$vendor_id',date='$date' where raw_material_purchase_id='$rp_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="raw_material_purchase_view.php";
</script>