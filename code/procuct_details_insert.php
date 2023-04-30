<?php
$product_id=$_POST['product_id'];  
$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];
$product_image=$_POST['product_image'];
$product_price=$_POST['product_price'];


include('dbconnect.php');

$sql="insert into product_details values(null,'$product_name','$product_description','$product_image','$product_price')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert('Product details inserted');
document.location="Product_details_form.php";

</script>

