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
                            Transportation Hiring Details <small></small>
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
                           Transportation Hiring Details Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Trans_hiring_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
    <td>Id</td>
    <td>Transportation Id </td>
    <td>From Route </td>
    <td>To Route </td>
    <td>No of KM </td>
    <td>Product Id </td>
    <td>Quantity</td>
    <td>Date</td>
    <td>Charges</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $sql=" select * from transportation_hiring th,transportation_details td,product_details pd where th.transportation_id=td.transportation_id and th.product_id=pd.product_id";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['transportation_hiring_id'];?></td>
    <td>&nbsp;<?php echo $row['transportation_id'];?></td>
    <td>&nbsp;<?php echo $row['from_route'];?></td>
    <td>&nbsp;<?php echo $row['to_route'];?></td>
    <td>&nbsp;<?php echo $row['no_of_km'];?></td>
    <td>&nbsp;<?php echo $row['product_id'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<?php echo $row['charges'];?></td>
    <td>&nbsp;<a href="trans_hiring_edit.php?tr_id=<?php echo $row['transportation_hiring_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="trans_hiring_delete.php?tr_id=<?php echo $row['transportation_hiring_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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
