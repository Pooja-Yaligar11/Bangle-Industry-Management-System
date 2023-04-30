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
                           Raw Material Purchase <small></small>
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
                           Raw Material Purchase Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Raw_material_purchase_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
    <td width="17">Id</td>
    <td width="50">Vendor Id </td>
    <td width="29">Date</td>
    <td width="28">Edit</td>
    <td width="762">Delete</td>
  </tr>
    </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $sql=" select * from raw_material_purchase rmp,vendor_details  vd where rmp.vendor_id=vd.vendor_id ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['raw_material_purchase_id'];?></td>
    <td>&nbsp;<?php echo $row['vendor_id'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<a href="raw_material_purchase_edit.php?rp_id=<?php echo $row['raw_material_purchase_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="raw_material_purchase_delete.php?rp_id=<?php echo $row['raw_material_purchase_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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

