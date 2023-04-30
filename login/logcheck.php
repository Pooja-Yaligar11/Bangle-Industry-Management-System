<?php session_start();?>
<?php


$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

include('db_connect.php');
$sql="select * from login where username='$username' and password='$password'";
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="commisioner")
{
header('location:commisioner/home.php');
}
else if($type=="policestation")
{
header('location:policestation/home.php');
}
else if($type=="user")
{
header('location:user/home.php');
}

}
else
{
?>
<script>
alert("Invalid Username Or Password");
document.location="index.html";
//history.back();
</script>
<?php
}

?>

