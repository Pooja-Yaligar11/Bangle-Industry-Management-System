<?php
include('dbconnect.php');
$p_id=$_POST['p_id']; 
$product_id=$_POST['product_id'];  
$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];

$product_price=$_POST['product_price'];

$product_image=$_FILES['product_image']['name'];
$tmp_location=$_FILES['product_image']['tmp_name'];
$target="../upload/".$product_image;
move_uploaded_file($tmp_location,$target);



$sql="update product_details  set product_name='$product_name',product_description='$product_description',product_image='$product_image',product_price='$product_price' where product_id='$p_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("values is updeted...");
document.location="product_details_view.php.php";
</script>