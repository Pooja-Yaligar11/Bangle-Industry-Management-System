<?php
include('dbconnect.php');
$r_id=$_POST['r_id']; 
$raw_material_name=$_POST['raw_material_name'];
$raw_material_description=$_POST['raw_material_description'];

$sql="update raw_material_details set raw_material_name='$raw_material_name',raw_material_description='$raw_material_description' where raw_material_id='$r_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="raw_material_view.php";
</script>