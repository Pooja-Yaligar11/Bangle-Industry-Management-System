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
                              Bill Master <small></small>
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
                             Bill Master
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?><?php
include('dbconnect.php');
$bm_id=$_REQUEST['bm_id'];
$sql="select * from bill_master where bill_master_id='$bm_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="formID" ID="formID" method="post" action="bill_masterl_update.php">
<input type="hidden" name="bm_id" value="<?php echo $row['bill_master_id'];?>">

    <table width="423" height="198" border="0" align="center">
    <tr>
      <td colspan="2">Bill Master </td>
    </tr>
    <tr>
      <td>Bill Date </td>
      <td><input name="bill_date" type="date" id="bill_date" value="<?php echo $row['bill_date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Customer  </td>
      <td> <select name="customer_id"  id="customer_id" class="form-control validate[required]">
	  <option value="">Select a customer</option>
	   <?php
  include('dbconnect.php');
  $sql1=" select * from customer_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
   <option value="<?php echo $row1['customer_id'];?>"<?php if($row1['customer_id']==$row['customer_id']){?> selected <?php } ?>><?php echo $row1['customer_name'];?></option>
  <?php
  }
  ?>
  </select></td>
    </tr>
    <tr>
      <td>Other Charges </td>
      <td><input name="other_charges" type="text" id="other_charges" value="<?php echo $row['other_charges'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">      <input type="reset" name="Reset" value="Reset" class="btn btn-success btn"></td>
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
