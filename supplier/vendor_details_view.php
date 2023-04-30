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
                            Vendor Details <small></small>
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
                           Vendor Details Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Vendor_detail_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
    <td>ID</td>
    <td>Vendor Name</td>
    <td>Vendor Address </td>
    <td>Vendor City </td>
    <td>Contact No </td>
    <td>E-mail Id </td>
    <td>Vendor Code </td>
    <td>GST NO </td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $sql=" select * from vendor_details ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['vendor_id'];?></td>
    <td>&nbsp;<?php echo $row['vendor_name'];?></td>
    <td>&nbsp;<?php echo $row['vendor_address'];?></td>
    <td>&nbsp;<?php echo $row['vendor_city'];?></td>
    <td>&nbsp;<?php echo $row['contact_no'];?></td>
    <td>&nbsp;<?php echo $row['email_id'];?></td>
    <td>&nbsp;<?php echo $row['vendor_code'];?></td>
    <td>&nbsp;<?php echo $row['gst_no'];?></td>
    <td>&nbsp;<a href="vendor_details_edit.php?v_id=<?php echo $row['vendor_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="vendor_details_delete.php?v_id=<?php echo $row['vendor_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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
