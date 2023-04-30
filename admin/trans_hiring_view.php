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
          <h1><i class="fa fa-th-list"></i> Transportation Hiring Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	 <a href="Trans_hiring_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

    <td>Id</td>
    <td>TRA Id </td>
    <td>From Route </td>
    <td>To Route </td>
    <td>No of KM </td>
    <td>Product Name </td>
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
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['transportation_hiring_id'];?></td>
    <td>&nbsp;<?php echo $row['transportation_name'];?></td>
    <td>&nbsp;<?php echo $row['from_route'];?></td>
    <td>&nbsp;<?php echo $row['to_route'];?></td>
    <td>&nbsp;<?php echo $row['no_of_km'];?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<?php echo $row['charges'];?></td>
    <td>&nbsp;<a href="trans_hiring_edit.php?tr_id=<?php echo $row['transportation_hiring_id'];?>" class="btn btn-info">Edit</a></td>
    <td>&nbsp;<a href="trans_hiring_delete.php?tr_id=<?php echo $row['transportation_hiring_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
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