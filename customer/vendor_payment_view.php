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
          <h1><i class="fa fa-th-list"></i> Vendor Payment </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	 <a href="payment_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
  <tr>
    <td>Id</td>
    <td>Vendor Name </td>
    <td>Amount</td>
    <td>Narration</td>
    <td>Date</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $tot=0;
  $sql=" select * from vendor_payment vp,vendor_details vd where vp.vendor_id=vd.vendor_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['amount'];
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['vendor_payment_id'];?></td>
    <td>&nbsp;<?php echo $row['vendor_name'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<?php echo $row['narration'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<a href="vendor_payment_edit.php?vp_id=<?php echo $row['vendor_payment_id'];?>"><img src="../image/edit.jpg" width="40" height="40"></a></td>
    <td>&nbsp;<a href="vendor_payment_delete.php?vp_id=<?php echo $row['vendor_payment_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
  </tr>
  <?php
  }
  ?>
                </tbody>
              </table>
			  <b>Total Amount: <?php echo $tot; ?></b>
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