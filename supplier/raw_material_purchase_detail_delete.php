<?php
include('dbconnect.php');
$rpd_id=$_REQUEST['rpd_id'];
$sql="delete from raw_material_purchase_details where raw_material_purchase_details_id='$rpd_id' ";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="raw_material_purchase_detail_view.php";
</script>