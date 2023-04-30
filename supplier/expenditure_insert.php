<?php
$expenditure_id=$_POST['expenditure_id'];  
$expenditure_name=$_POST['expenditure_name'];
$description=$_POST['description'];
$total_amount=$_POST['total_amount'];
$given_to=$_POST['given_to'];
$voucher_no=$_POST['voucher_no'];
$given_date=$_POST['given_date'];

include('dbconnect.php');

$sql="insert into expenditure values(null,'$expenditure_name','$description','$total_amount','$given_to','$voucher_no','$given_date')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="expenditure_form.php";

</script>
