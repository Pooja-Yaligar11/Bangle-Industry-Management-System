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
          <h1><i class="fa fa-th-list"></i> Stock details </h1>
          <p>Table</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
  <tr>
    <td>Id</td>
    <td>Product Name </td>
    <td>Stock</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
    </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $tot=0;
  $sql=" select * from stock_details sd, product_details pd where sd.product_id=pd.product_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['stock'];
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['stock_id'];?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['stock'];?></td>
    <td>&nbsp;<a href="stock_details_edit.php?s_id=<?php echo $row['stock_id'];?>" class="btn btn-info">Edit</a></td>
    <td>&nbsp;<a href="stock_detail_delete.php?s_id=<?php echo $row['stock_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
  </tr>
  
  <?php
  }
  ?>

                </tbody>
              </table>
			  Total Stock : <?php echo $tot; ?>
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