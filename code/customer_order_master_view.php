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
                           Customer Order Master <small></small>
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
                            Customer Order Master Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Customer_order_master_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
 
    <td>ID</td>
    <td>Date</td>
    <td>Customer Id </td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
    </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $sql=" select * from customer_order_master com,customer_details cd where com.customer_id=cd.customer_id";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_order_master_id'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<?php echo $row['customer_id'];?></td>
    <td>&nbsp;<a href="customer_order_master_edit.php?com_id=<?php echo $row['customer_order_master_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="customer_order_master_delete.php?com_id=<?php echo $row['customer_order_master_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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