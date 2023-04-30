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
                              Raw Material Purchase Details <small></small>
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
                              Raw Material Purchase Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<form name="formID" ID="formID" method="post" action="raw_material_purchase_detail_insert.php ">
 <table width="453" height="220" border="0" align="center">
    <tr>
      <td width="140">Raw Material purchase Id</td>
    <td> <select name="raw_material_purchase_id"  id="raw_material_purchase_id" class="form-control validate[required]">
	   <option value="">Select a Raw Material purchase</option>
	   <?php
	   include('dbconnect.php');
  $sql1=" select * from raw_material_purchase ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['raw_material_purchase_id'];?>"><?php echo $row1['date'];?></option>
  <?php
  }
  ?>
   
	  </select> </td> 
    </tr>
    <tr>
      <td>Raw Material Id </td>
      <td> <select name="raw_material_id" id="raw_material_id" class="form-control validate[required]">
	   <option value="">Select a Raw Material</option>
	   <?php
 
  $sql1=" select * from raw_material_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
      <option value="<?php echo $row1['raw_material_id'];?>"><?php echo $row1['raw_material_name'];?></option>
  <?php
  }
  ?>

	  </select> </td> 
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="date" id="date" class="form-control validate[required,custom[date]]]"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="discount" type="text" id="discount" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"   class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset"  class="btn btn-danger"></td>
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
