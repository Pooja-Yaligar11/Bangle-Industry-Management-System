<?php
include('dbconnect.php');
$ex_id=$_REQUEST['ex_id'];
$sql="delete from expenditure where expenditure_id='$ex_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is deleted..");
document.location="expenditure_view.php";
</script>