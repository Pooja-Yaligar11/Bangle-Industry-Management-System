<?php
include('dbconnect.php');
$tr_id=$_POST['tr_id']; 
$transportation_id=$_POST['transportation_id'];
$from_route=$_POST['from_route'];
$to_route=$_POST['to_route'];
$no_of_km=$_POST['no_of_km'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$charges=$_POST['charges'];

 $sql="update transportation_hiring set transportation_id='$transportation_id',from_route='$from_route',to_route='$to_route',no_of_km='$no_of_km',product_id='$product_id',quantity='$quantity',date='$date',charges='$charges' where transportation_hiring_id='$tr_id'";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="trans_hiring_view.php";
</script>