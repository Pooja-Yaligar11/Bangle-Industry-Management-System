<?php
include('dbconnect.php');
$r_id=$_REQUEST['r_id'];
$sql="delete from raw_material_details where raw_material_id='$r_id' ";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="raw_material_detail_view.php";
</script>