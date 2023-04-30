<?php
include('dbconnect.php');
$u_id=$_POST['u_id']; 
$user_id=$_POST['user_id'];  
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$types=$_POST['types'];
$security_question=$_POST['security_question'];
$security_answer=$_POST['security_answer'];
$status=$_POST['status'];

$sql="update user set user_name='$user_name',password='$password',types='$types',security_question='$security_question',security_answer='$security_answer',status='$status' where user_id='$u_id'";
mysql_query($sql);
?>
<script>
alert("values is updeted...");
document.location="user_view.php";
</script>