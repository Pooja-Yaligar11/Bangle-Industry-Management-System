<?php
$transportation_hiring_id=$_POST['transportation_hiring_id'];  
$transportation_id=$_POST['transportation_id'];
$from_route=$_POST['from_route'];
$to_route=$_POST['to_route'];
$no_of_km=$_POST['no_of_km'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$charges=$_POST['charges'];


include('dbconnect.php');

$sql="insert into transportation_hiring values(null,'$transportation_id','$from_route','$to_route','$no_of_km','$product_id','$quantity','$date','$charges')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Trans_hiring_form.php";

</script>
