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
                         User Details <small></small>
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
                            User Details Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="user_view.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									  <tr>
    <td>User Id </td>
    <td>User Name </td>
    <td>Password</td>
    <td>Type</td>
    <td>Security Question </td>
    <td>Security Answer </td>
    <td>Status</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $sql=" select * from user ";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['user_id'];?></td>
    <td>&nbsp;<?php echo $row['user_name'];?></td>
    <td>&nbsp;<?php echo $row['password'];?></td>
    <td>&nbsp;<?php echo $row['types'];?></td>
    <td>&nbsp;<?php echo $row['security_question'];?></td>
    <td>&nbsp;<?php echo $row['security_answer'];?></td>
    <td>&nbsp;<?php echo $row['status'];?></td>
    <td>&nbsp;<a href="user_edit.php?u_id=<?php echo $row['user_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="user_delete.php?u_id=<?php echo $row['user_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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
