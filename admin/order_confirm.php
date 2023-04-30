<?php
include('dbconnect.php');
$cod_id=$_REQUEST['cod_id'];
$pmid=$_REQUEST['pmid'];
$c_id=$_REQUEST['cust_id'];
$sql="update customer_order_details set cust_order_status='Confirmed'  where customer_order_details_id='$cod_id' ";
mysqli_query($conn,$sql);

?>
<script>
alert("values is Confirmed..");
document.location="customer_order_master_more.php?pmid=<?php echo $pmid; ?>&c_id=<?php echo $c_id; ?>";
</script>