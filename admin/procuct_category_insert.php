<?php
$product_category_name=$_POST['product_category_name'];



include('dbconnect.php');

$sql="insert into product_category values(null,'$product_category_name')";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert('Product details inserted');
document.location="procuct_category_view.php";

</script>

