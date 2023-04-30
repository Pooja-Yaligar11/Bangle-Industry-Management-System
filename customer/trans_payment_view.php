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
          <h1><i class="fa fa-th-list"></i> Transportation PAyment Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	 <a href="Trans_Payment_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <td>Id</td>
    <td>Tra Id </td>
    <td>Given Amount </td>
    <td>Given Date </td>
    <td>Description</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $sql="select * from transportation_payment tp,transportation_details td where tp.transportation_id=td.transportation_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['transportation_payment_id']; ?></td>
    <td>&nbsp;<?php echo $row['transportation_name']; ?></td>
    <td>&nbsp;<?php echo $row['given_amount']; ?></td>
    <td>&nbsp;<?php echo $row['given_date'];?></td>
    <td>&nbsp;<?php echo $row['description']; ?></td>
    <td>&nbsp;<a href="trans_payment_edit.php?tp_id=<?php echo $row['transportation_payment_id'];?>"><img src="../image/edit.jpg" width="40" height="40"></a></td>
    <td>&nbsp;<a href="trans_payment_delete.php?tp_id=<?php echo $row['transportation_payment_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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