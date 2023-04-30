<?php
include('dbconnect.php');
$tp_id=$_REQUEST['tp_id'];
$sql="delete from transportation_payment  where transportation_payment_id='$tp_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="trans_payment_view.php";
</script>