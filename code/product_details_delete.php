<?php
include('dbconnect.php');
$p_id=$_REQUEST['p_id'];
$sql="delete from product_details  where product_id='$p_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="product_details_view.php.php";
</script>