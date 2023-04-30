<?php
$raw_material_id=$_POST['raw_material_id'];  
$raw_material_name=$_POST['raw_material_name'];
$raw_material_description=$_POST['raw_material_description'];



include('dbconnect.php');

$sql="insert into raw_material_details values(null,'$raw_material_name','$raw_material_description')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Raw_material_form.php";

</script>
