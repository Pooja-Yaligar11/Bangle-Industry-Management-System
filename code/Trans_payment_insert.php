<?php
$transportation_payment_id=$_POST['transportation_payment_id'];  
$transportation_id=$_POST['transportation_id'];
$given_amount=$_POST['given_amount'];
$given_date=$_POST['given_date'];
$description=$_POST['description'];


include('dbconnect.php');

$sql="insert into transportation_payment values(null,'$transportation_id','$given_amount','$given_date','$description')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Trans_Payment_form.php";

</script>
