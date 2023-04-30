<?php
$product_id=$_POST['product_id'];  
$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];

$product_price=$_POST['product_price'];
$product_category_id=$_POST['product_category_id'];
$rate=$_POST['rate'];
$product_size=$_POST['product_size'];
$product_type=$_POST['product_type'];

$product_image=$_FILES['product_image']['name'];
$tmp_location=$_FILES['product_image']['tmp_name'];
$target="../upload/".$product_image;
move_uploaded_file($tmp_location,$target);



include('dbconnect.php');

$sql="insert into product_details values(null,'$product_category_id','$product_name','$product_size','$product_type','$product_description','$product_image','$product_price')";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert('Product details inserted');
document.location="product_details_view.php.php";

</script>

