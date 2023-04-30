<?php
include('dbconnect.php');
$c_id=$_REQUEST['c_id'];
$sql="delete from customer_details where customer_id='$c_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="customer_details_view.php";
</script>