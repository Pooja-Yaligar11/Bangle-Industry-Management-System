<?php

session_start();
?>
<?php
	
	
	 $a=$_POST['new_pwd'];
	$b=$_POST['conf_pwd'];
	
		include('dbconnect.php');
		$sql = "select * from login where username ='".$_SESSION['uname']."' and password='".$_POST['old_pwd']."'";
		$res=mysql_query($sql);
	if($a==$b)
	{
		if(mysql_num_rows($res)>0)
		{
			$sql1 = "update login set password = '".$_POST['new_pwd']."' where username ='".$_SESSION['uname']."'";
			$res1 = mysql_query($sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="change pwd.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="change pwd.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="change pwd.php";
				</script>
			<?php
		}
		
?>
