<?php
$production_id=$_POST['production_id'];  
$product_id=$_POST['product_id'];
$total_production=$_POST['total_production'];
$description=$_POST['description'];
$production_date=$_POST['production_date'];


include('dbconnect.php');

$sql="insert into production  values(null,'$product_id','$total_production','$description','$production_date')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="productioon_form.php";

</script>
