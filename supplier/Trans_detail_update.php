<?php
include('dbconnect.php');
$td_id=$_POST['td_id']; 
$transportation_name=$_POST['transportation_name'];
$transportation_address=$_POST['transportation_address'];
$contact_no=$_POST['transportation_address'];



$sql="update transportation_details set transportation_name='$transportation_name',transportation_address='$transportation_address',transportation_address='$transportation_address' where transportation_id='$td_id'";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="trans_detail_view.php";
</script>