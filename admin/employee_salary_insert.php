<?php
  include('dbconnect.php');
$employee_id=$_POST['employee_id'];

 $sql=" select * from  employee_details where employee_id='$employee_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
$basic_salary=$row['basic_salary'];

$working_days=$_POST['working_days'];


$worked_days=$_POST['worked_days'];
$ot_days=$_POST['ot_days'];
$other_charges=$_POST['other_charges'];
$pf=$_POST['pf'];
$month=$_POST['month'];
$year=$_POST['year'];
$date=$_POST['date'];


$sql="insert into emp_salary values(null,'$employee_id','$basic_salary','$working_days','$worked_days','$ot_days','$other_charges','$pf','$month','$year','$date')";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="employee_salary_view.php";

</script>
