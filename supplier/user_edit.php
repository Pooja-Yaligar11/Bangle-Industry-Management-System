<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
    
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                              User Details<small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?><?php
include('dbconnect.php');
$u_id=$_REQUEST['u_id'];
$sql="select * from user where user_id='$u_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form  name="formID" ID="formID" method="post" action="user_update.php">
<input type="hidden" name="u_id" value="<?php echo $row['user_id'];?>">
  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>User Name</td>
      <td><input name="user_name" type="text" id="user_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="text" id="password" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="types" type="text" id="types" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Security Question </td>
      <td><input name="security_question" type="text" id="security_question" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Security Answer </td>
      <td><input name="security_answer" type="text" id="security_answer" class="form-control validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --><?php include('footer.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>
