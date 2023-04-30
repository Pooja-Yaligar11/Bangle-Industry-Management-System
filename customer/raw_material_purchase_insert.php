<?php
$raw_material_purchase_id=$_POST['raw_material_purchase_id'];  
$vendor_id=$_POST['vendor_id'];
$date=$_POST['date'];



include('dbconnect.php');

$sql="insert into raw_material_purchase values(null,'$vendor_id','$date')";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="raw_material_purchase_detail_view.php";

</script>
