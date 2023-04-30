<?php
  
$employee_name=$_POST['employee_name'];
$employee_address=$_POST['employee_address'];
$employee_city=$_POST['employee_city'];
$gender=$_POST['gender'];
$contact_no=$_POST['contact_no'];
$employee_type=$_POST['employee_type'];
$employee_designaton=$_POST['employee_designaton'];
$basic_salary=$_POST['basic_salary'];
include('dbconnect.php');

$sql="insert into employee_details values(null,'$employee_name','$employee_address','$employee_city','$gender','$contact_no','$employee_type','$employee_designaton','$basic_salary')";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="employee_details_view.php";

</script>
