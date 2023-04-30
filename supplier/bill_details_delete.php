<?php
include('dbconnect.php');
$b_id=$_REQUEST['b_id'];
$sql="delete from bill_details  where bill_details_id='$b_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="bill_detail_view.php";
</script>