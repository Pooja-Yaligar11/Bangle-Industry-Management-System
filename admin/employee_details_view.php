<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Employee Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	  <a href="employee_details_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

      <td>ID</td>
      <td>Employee Name </td>
      <td>Employee Address </td>
      <td>Employee City </td>
      <td>Gender</td>
      <td>Contact No </td>
      <td>Employee Type </td>
      <td>Employee Deasignation </td>
      <td>Basic Salary </td>
      <td>Edit</td>
      <td>Delete</td></tr>
  </thead>
  <tbody>
	<?php
  include('dbconnect.php');
  $sql="select * from employee_details" ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
    <tr>
      <td>&nbsp;<?php echo $row['employee_id'];?></td>
      <td>&nbsp;<?php echo $row['employee_name'];?></td>
      <td>&nbsp;<?php echo $row['employee_address'];?></td>
      <td>&nbsp;<?php echo $row['employee_city'];?></td>
      <td>&nbsp;<?php echo $row['gender'];?></td>
      <td>&nbsp;<?php echo $row['contact_no'];?></td>
      <td>&nbsp;<?php echo $row['employee_type'];?></td>
      <td>&nbsp;<?php echo $row['employee_designaton'];?></td>
      <td>&nbsp;<?php echo $row['basic_salary'];?></td>
      <td>&nbsp;<a href="bill_details_edit.php?bd_id=<?php echo $row['bill_details_id'];?>" class="btn btn-info">Edit</a></td>
      <td>&nbsp;<a href="bill_details_edit.php?bd_id=<?php echo $row['bill_details_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
    </tr>
	<?php
	}
	?>
           </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>
  </body>
</html>