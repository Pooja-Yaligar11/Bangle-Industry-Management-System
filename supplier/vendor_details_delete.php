<?php
include('dbconnect.php');
$v_id=$_REQUEST['v_id'];
$sql="delete from vendor_details  where vendor_id='$v_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="vendor_details_view.php";
</script>