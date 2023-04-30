<?php
$transportation_id=$_POST['transportation_id'];  
$transportation_name=$_POST['transportation_name'];
$transportation_address=$_POST['transportation_address'];
$contact_no=$_POST['contact_no'];



include('dbconnect.php');

$sql="insert into transportation_details values(null,'$transportation_name','$transportation_address','$contact_no')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="Trans_detail_form.php";

</script>
