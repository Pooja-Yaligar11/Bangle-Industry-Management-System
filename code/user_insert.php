<?php
$user_id=$_POST['user_id'];  
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$types=$_POST['types'];
$security_question=$_POST['security_question'];
$security_answer=$_POST['security_answer'];
$status=$_POST['status'];

include('dbconnect.php');

$sql="insert into user values(null,'$user_name','$password','$types','$security_question','$security_answer','$status')";
mysql_query($sql);


?>
<script language="javascript1.2">
alert(' inserted');
document.location="User_form.php";

</script>
