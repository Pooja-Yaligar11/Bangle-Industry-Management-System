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
                           Transportation Details <small></small>
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
                             Transportation Details Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="Trans_detail_form.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
    <td>Id</td>
    <td>Transportation Name </td>
    <td>Transportation Address </td>
    <td>Contact No </td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
   </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $sql=" select * from transportation_details";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['transportation_id'];?></td>
    <td>&nbsp;<?php echo $row['transportation_name'];?></td>
    <td>&nbsp;<?php echo $row['transportation_address'];?></td>
    <td>&nbsp;<?php echo $row['contact_no'];?></td>
    <td>&nbsp;<a href="trans_details_edit.php?td_id=<?php echo $row['transportation_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="trans_details_delete.php?td_id=<?php echo $row['transportation_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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

