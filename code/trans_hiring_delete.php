<?php
include('dbconnect.php');
$tr_id=$_REQUEST['tr_id'];
$sql="delete from  transportation_hiring  where transportation_hiring_id='$tr_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="trans_hiring_view.php";
</script>