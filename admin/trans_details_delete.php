<?php
include('dbconnect.php');
$td_id=$_REQUEST['td_id'];
$sql="delete from transportation_details   where transportation_id='$td_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="trans_detail_view.php";
</script>