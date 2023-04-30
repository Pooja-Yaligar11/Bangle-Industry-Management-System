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
          <h1><i class="fa fa-th-list"></i> Vendor </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	  <a href="Vendor_detail_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
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
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
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
    <td>&nbsp;<a href="vendor_details_edit.php?v_id=<?php echo $row['vendor_id'];?>" class="btn btn-info">Edit	</a></td>
    <td>&nbsp;<a href="vendor_details_delete.php?v_id=<?php echo $row['vendor_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
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