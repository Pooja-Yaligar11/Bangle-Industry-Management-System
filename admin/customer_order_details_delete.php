<?php
include('dbconnect.php');
$cod_id=$_REQUEST['cod_id'];
$sql="delete from customer_order_details  where customer_order_details_id='$cod_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="customer_order_details_view.php";
</script>