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
          <h1><i class="fa fa-th-list"></i> Transportation Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	  <a href="Trans_detail_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
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
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['transportation_id'];?></td>
    <td>&nbsp;<?php echo $row['transportation_name'];?></td>
    <td>&nbsp;<?php echo $row['transportation_address'];?></td>
    <td>&nbsp;<?php echo $row['contact_no'];?></td>
    <td>&nbsp;<a href="trans_details_edit.php?td_id=<?php echo $row['transportation_id'];?>" class="btn btn-info">Edit</a></td>
    <td>&nbsp;<a href="trans_details_delete.php?td_id=<?php echo $row['transportation_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
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