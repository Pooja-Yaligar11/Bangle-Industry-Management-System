<?php
$raw_material_purchase_details_id=$_POST['raw_material_purchase_details_id'];  
$raw_material_purchase_id=$_POST['raw_material_purchase_id'];
$raw_material_id=$_POST['raw_material_id'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$discount=$_POST['discount'];

include('dbconnect.php');

$sql="insert into raw_material_purchase_details  values(null,'$raw_material_purchase_id','$raw_material_id','$quantity','$date','$discount')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Raw_Material_purchase_detail_form.php ";

</script>
