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
                              Raw Material <small></small>
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
                            Raw Material 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$r_id=$_REQUEST['r_id'];
$sql="select * from raw_material_details  where raw_material_id='$r_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="formID" ID="formID" method="post" action="raw_m_update.php">
<input type="hidden" name="r_id" value="<?php echo $row['raw_material_id'];?>">

  <table width="453" height="220" border="0" align="center">
    <tr>
      <td>Raw Material Name</td>
      <td><input name="raw_material_name" type="text" id="raw_material_name" value="<?php echo $row['raw_material_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Raw Material Description </td>
      <td><input name="raw_material_description" type="text" id="raw_material_description" value="<?php echo $row['raw_material_description'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2">      <input type="submit" name="Submit" value="Submit"   class="btn btn-success btn">        <input type="reset" name="Reset" value="Reset"  class="btn btn-danger"></td>
    </tr>
  </table>
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
