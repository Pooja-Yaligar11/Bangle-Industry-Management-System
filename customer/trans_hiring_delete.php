<?php
include('dbconnect.php');
$tr_id=$_REQUEST['tr_id'];
$sql="delete from  transportation_hiring  where transportation_hiring_id='$tr_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="trans_hiring_view.php";
</script>