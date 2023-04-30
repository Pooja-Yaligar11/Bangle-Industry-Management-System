

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang= "en"> <!--<![endif]-->
<head>
  <meta charset= "utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/login_css.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
	<?php
include('db_connect.php');
$uname=$_REQUEST['username'];
$sql="select * from login where binary(username)='$uname'";
//echo $sql;
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
    $hintqtn=$row["hint_question"];
	$hintans=$row["hint_answer"];
	$pwd=$row["password"];
?>
      <h1>Please Enter Your Hint Answer.</h1>
						
					<div class="alert alert-info">
						Hint Question: <?php echo " ".$hintqtn; ?>
					</div>
					<form class="form-horizontal" action="getpwd.php" method="post">
						<fieldset>
							
						<div class="input-prepend" title= "Hint Answer" data-rel= "tooltip">
								<input name="type_ans" type="text" class="input-large span10" id="username" size="50" autofocus  />
                                <input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">                              
                          <input name="password" type="hidden" id="password" value="<?php echo $pwd; ?>">
</div>
							
							<div class="clearfix"></div>

						
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Get Password</button>
							</p>
						</fieldset>
					</form>
				</div>


</body>
</html>
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
document.location="index.html";
</script>
<?php
}
?>

