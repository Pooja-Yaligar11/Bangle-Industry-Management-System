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
                             Customer Receipt  <small></small>
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
                            Customer Receipt Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Customer_receipt_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
    </thead>
  <tbody>
    <td>Id</td>
    <td>Customer Id </td>
    <td>Amount</td>
    <td>Narration</td>
    <td>Date</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
   <?php
  include('dbconnect.php');
  $sql=" select * from customer_receipts cr,customer_details cd where cr.customer_id=cd.customer_id ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_receipts_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_id'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<?php echo $row['narration'];?></td>
    <td>&nbsp;<?php echo $row['Date'];?></td>
    <td>&nbsp;<a href="customer_receipt_edit.php?cr_id=<?php echo $row['customer_receipts_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="customer_receipt_delete.php?cr_id=<?php echo $row['customer_receipts_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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
