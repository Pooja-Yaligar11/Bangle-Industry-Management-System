<?php
include('dbconnect.php');
$p_id=$_POST['p_id']; 
$product_id=$_POST['product_id'];  
$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];
$product_image=$_POST['product_image'];
$product_price=$_POST['product_price'];

$sql="update product_details  set product_name='$product_name',product_description='$product_description',product_image='$product_image',product_price='$product_price' where product_id='$p_id' ";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="product_details_view.php.php";
</script>