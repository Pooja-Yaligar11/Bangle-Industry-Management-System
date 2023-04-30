<?php
include('dbconnect.php');
$u_id=$_REQUEST['u_id'];
$sql="delete from user where user_id='$u_id' ";
mysql_query($sql);

?>
<script>
alert("values is deleted..");
document.location="user_view.php";
</script>