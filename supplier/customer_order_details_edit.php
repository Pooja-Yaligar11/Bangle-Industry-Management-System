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
                              Customer Order Details <small></small>
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
                             Customer Order Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$cod_id=$_REQUEST['cod_id'];
$sql="select * from customer_order_details  where customer_order_details_id='$cod_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="customer_order_details_updatet.php">
<input type="hidden" name="cod_id" value="<?php echo $row['customer_order_details_id'];?>">

     <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Customer Order Master  </td>
    <td>  <select name="customer_order_master_id"  id="customer_order_master_id" >
	   <option value="">Select a Customer Order Master</option>
	   <?php
    include('dbconnect.php');
  $sql1=" select * from customer_order_master";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
    <option value="<?php echo $row1['customer_order_master_id']?>"<?php if($row1['customer_order_master_id']==$row['customer_order_master_id']){?> selected <?php } ?>><?php echo $row1['date'];?></option>
	<?php
	}
	?>
  </select></td>
    </tr>
    <td>Product</td>
      <td>
	  <select name="product_id" id="product_id">  
	  <option value="">Select a Product</option>
	    <?php
 
  $sql1=" select * from product_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['product_id'];?>"<?php if($row1['product_id']==$row['product_id']){?> selected <?php } ?>><?php echo $row1['product_name'];?></option>
  <?php
  }
  ?>
	  </select>
    </tr>
    <tr>
      <td>Quantity      </td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $row['quantity'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
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
