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
          <h1><i class="fa fa-th-list"></i> Customer Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	<a href="Customer_detail_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <td width="86">Customer ID </td>
    <td width="86">Customer Name </td>
    <td width="63">Customer Address </td>
    <td width="94">Customer City </td>
    <td width="60">Contact No</td>
    <td width="58">E-mail Id </td>
    <td width="21">Customer Code </td>
    <td width="24">Edit</td>
    <td width="21">Delete</td>
  </tr>
    </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $sql=" select * from customer_details  ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<?php echo $row['customer_address'];?></td>
    <td>&nbsp;<?php echo $row['customer_city'];?></td>
    <td>&nbsp;<?php echo $row['contact_no'];?></td>
    <td>&nbsp;<?php echo $row['email_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_code'];?></td>
    <td>&nbsp;<a href="customer_details_edit.php?c_id=<?php echo $row['customer_id'];?>"><img src="../image/edit.jpg" width="40" height="40"></a></td>
    <td>&nbsp;<a href="customer_details_delete.php?c_id=<?php echo $row['customer_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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