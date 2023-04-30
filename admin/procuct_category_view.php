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
          <h1><i class="fa fa-th-list"></i> Product Category </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	 <a href="procuct_category_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th>ID</th>
    <th>Category Name </th>
<!--     <th>Edit</th> -->
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $s1=1;
  $sql="select * from product_category ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  <tr>
    <td>&nbsp;<?php echo $s1++;?></td>
    <td>&nbsp;<?php echo $row['product_category_name'];?></td>
  <!--   <td>&nbsp;<a href="bill_details_edit.php?bd_id=<?php echo $row['product_category_id'];?>" class="btn btn-info">Edit</a></td> -->
    <td>&nbsp;<a href="procuct_category_delete.php?product_category_id=<?php echo $row['product_category_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30">"</a></td>
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