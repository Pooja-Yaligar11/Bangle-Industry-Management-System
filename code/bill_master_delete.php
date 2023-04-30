<?php
include('dbconnect.php');
$bm_id=$_REQUEST['bm_id'];
$sql="delete from bill_master  where bill_master_id='$bm_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="bill_master_view.php";
</script>