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
          <h1><i class="fa fa-th-list"></i> Customer Order Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
  <tr>
 
    <td>ID</td>
    <td>Date</td>
    <td>Customer Name </td>
    <td>More</td>
    <td>Delete</td>
  </tr>
    </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $sql=" select * from customer_order_master com,customer_details cd where com.customer_id=cd.customer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_order_master_id'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<a href="customer_order_master_more.php?pmid=<?php echo $row['customer_order_master_id'];?>&c_id=<?php echo $row['customer_id'];?>" class="btn btn-primary">More</a></td>
    <td>&nbsp;<a href="customer_order_master_delete.php?com_id=<?php echo $row['customer_order_master_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
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