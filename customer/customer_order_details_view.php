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
	  <a href="Customer_Order_details_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

    <td width="63"> ID </td>
    <td width="97">Customer Name </td>
    <td width="81">Product Name </td>
    <td width="64">Quantity</td>
    <td width="52">Edit</td>
    <td width="49">Delete</td>
  </tr>
    </thead>
  <tbody>
   <?php
  include('dbconnect.php');

  $sql=" select * from customer_order_details cod,customer_order_master com,product_details pd where cod.customer_order_master_id=com.customer_order_master_id and cod.product_id=pd.product_id ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
 
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_order_details_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
    <td>&nbsp;<a href="customer_order_details_edit.php?cod_id=<?php echo $row['customer_order_details_id'];?>"><img src="../image/edit.jpg" width="30" height="30"></a></td>
    <td>&nbsp;<a href="customer_order_details_delete.php?cod_id=<?php echo $row['customer_order_details_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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