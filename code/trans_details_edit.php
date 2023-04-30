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
                               Transportation Details <small></small>
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
                             Transportation Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$td_id=$_REQUEST['td_id'];
$sql="select * from transportation_details where transportation_id='$td_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<form  name="formID" ID="formID" method="post" action="Trans_detail_update.php">
<input type="hidden" name="td_id" value="<?php echo $row['transportation_id'];?>">

   <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Transportation Name </td>
      <td><input name="transportation_name" type="text" id="transportation_name" value="<?php echo $row['transportation_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Transportation Address      </td>
      <td><textarea name="transportation_address" id="transportation_address" class="form-control validate[required]"><?php echo $row['transportation_address'];?></textarea></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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

