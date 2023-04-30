<?php
include('dbconnect.php');
$pr_id=$_REQUEST['pr_id'];
$sql="delete from production  where production_id='$pr_id' ";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="production_view.php";
</script>