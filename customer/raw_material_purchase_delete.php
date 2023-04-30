<?php
include('dbconnect.php');
$rp_id=$_REQUEST['rp_id'];
$sql="delete from raw_material_purchase where raw_material_purchase_id='$rp_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values is deleted..");
document.location="raw_material_purchase_view.php";
</script>