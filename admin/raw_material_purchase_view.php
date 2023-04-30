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
          <h1><i class="fa fa-th-list"></i> Raw Materials Purchase</h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	 <a href='Raw_material_purchase_form.php' class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

    <th >Id</th>
    <th >Vendor Name </th>
    <th>Date</th>
    <th >Edit</th>
    <th >Delete</th>
  </tr>
    </thead>
  <tbody>
  <?php
  include('dbconnect.php');
   $sql=" select * from raw_material_purchase rmp,vendor_details  vd where rmp.vendor_id=vd.vendor_id ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['raw_material_purchase_id'];?></td>
    <td>&nbsp;<?php echo $row['vendor_name'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<a href="Raw_material_purchase_more.php?pmid=<?php echo $row['raw_material_purchase_id'];?>&s_id=<?php echo $row['vendor_id'];?>" class="btn btn-primary">More</a></td>
    <td>&nbsp;<a href="raw_material_purchase_delete.php?rp_id=<?php echo $row['raw_material_purchase_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
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