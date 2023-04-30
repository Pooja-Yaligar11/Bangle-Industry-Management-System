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
          <h1><i class="fa fa-th-list"></i> Product Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	<!--  <a href="Product_details_form.php" class="btn btn-primary">Add New Details</a><hr/> -->
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
    <td>Category</td>
    <td>Size</td>
    <td>Type</td>
    <td>Product Description </td>
    <td>Product Image </td>
    <td>Product Price </td>
    <!-- <td>Edit</td>
    <td>Delete</td> -->
  </tr>
    </thead>
  <tbody>
  <?php
  $s1=1;
  include('dbconnect.php');
  $sql=" select * from product_details p,product_category pg where p.product_category_id=pg.product_category_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $s1++;?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['product_category_name'];?></td>
    <td>&nbsp;<?php echo $row['product_size'];?></td>
    <td>&nbsp;<?php echo $row['product_type'];?></td>
    <td>&nbsp;<?php echo $row['product_description'];?></td>
    <td>&nbsp;<img src="../upload/<?php echo $row['product_image'];?>" height="80px" width="80px"></td>
    <td>&nbsp;<?php echo $row['product_price'];?></td>
 <!--    <td>&nbsp;<a href="product_details_edit.php?p_id=<?php echo $row['product_id'];?>"><img src="../image/edit.jpg" width="40" height="40"></a></td>
    <td>&nbsp;<a href="product_details_delete.php?p_id=<?php echo $row['product_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
  </tr> -->
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