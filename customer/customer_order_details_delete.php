<?php
include('dbconnect.php');

$cod_id=$_REQUEST['cod_id'];
$pmid=$_REQUEST['pmid'];


$sql="delete from customer_order_details  where customer_order_details_id='$cod_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is Deleted..");
document.location="Customer_order_master_form.php?pmid=<?php echo $pmid ?>&cod_id=<?php echo $pmid ?>";
</script>