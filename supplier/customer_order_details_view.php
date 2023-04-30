O<!DOCTYPE html>
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
                             Customer Order Details  <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Tables</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Order Details Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Customer_Order_details_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
    <td width="63"> ID </td>
    <td width="97">Customer Order Master ID </td>
    <td width="81">Product ID </td>
    <td width="64">Quantity</td>
    <td width="52">Edit</td>
    <td width="49">Delete</td>
  </tr>
    </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $sql=" select * from customer_order_details cod,customer_order_master com,product_details pd where cod.customer_order_master_id=com.customer_order_master_id and cod.product_id=pd.product_id ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_order_details_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_order_master_id'];?></td>
    <td>&nbsp;<?php echo $row['product_id'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
    <td>&nbsp;<a href="customer_order_details_edit.php?cod_id=<?php echo $row['customer_order_details_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="customer_order_details_delete.php?cod_id=<?php echo $row['customer_order_details_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
  </tr>
  <?php
  }
  ?>
</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           <?php include('footer.php');?>
          </body>
</html>
