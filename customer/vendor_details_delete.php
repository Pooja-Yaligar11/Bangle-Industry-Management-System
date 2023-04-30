<?php
include('dbconnect.php');
$v_id=$_REQUEST['v_id'];
$sql="delete from vendor_details  where vendor_id='$v_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="vendor_details_view.php";
</script>