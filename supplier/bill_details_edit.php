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
                              Bill Details <small></small>
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
                             Bill Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$bd_id=$_REQUEST['bd_id'];
$sql="select * from bill_details where bill_details_id='$bd_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="formID" ID="formID"  method="post" action="bill_detail_update.php">
<input type="hidden" name="bd_id" value="<?php echo $row['bill_details_id'];?>">
     <table width="453" height="220" border="0" align="center">
    <tr>
      <td colspan="2">Bill Details </td>
    </tr>
    <tr>
        <td>Bill Master</td>
      <td><select name="bill_master_id" id="bill_master_id" class="form-control validate[required]">  
	  <option value="">Select a Bill</option>
	    <?php
		 include('dbconnect.php');
  $sql1=" select * from bill_master ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['bill_master_id'];?>"<?php if($row1['bill_master_id']==$row['bill_master_id']){?> selected <?php } ?>>;<?php echo $row1['bill_date'];?></option>
  <?php
  }
  ?>
	  </select>
	  </td>
    <tr>
       <td>Product</td>
      
	 <td> <select name="product_id" id="product_id" class="form-control validate[required]">  
	  <option value="">Select a Product</option>
	    <?php
  include('dbconnect.php');
  $sql1=" select * from product_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['product_id'];?>"<?php if($row1['product_id']==$row['product_id']){?> selected <?php } ?>>;<?php echo $row1['product_name'];?></option>
  <?php
  }
  ?>
	  </select>
	  </td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $row['quantity'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" value="<?php echo $row['rate'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="discount" type="text" id="discount" value="<?php echo $row['discount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
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
