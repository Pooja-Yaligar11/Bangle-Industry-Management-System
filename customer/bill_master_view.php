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
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

    <td>Bill Master ID </td>
    <td>Bill Date </td>
    <td>Company ID </td>
    <td>Other Charges</td>
	<td>Bill More</td>
  
  </tr>
    </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $uname=$_SESSION['uname'];
  $sql=" select * from bill_master bm,customer_details cd where bm.customer_id=cd.customer_id and cd.customer_code='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
   $bmid=$row["bill_master_id"];
  $dat=$row["bill_date"];
  $cust_id=$row["customer_id"];
  $cust_name=$row["customer_name"];
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['bill_master_id'];?></td>
    <td>&nbsp;<?php echo $row['bill_date'];?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<?php echo $row['other_charges'];?></td>
	<td>&nbsp;<a href="bill_details_more.php?bmid=<?php echo $bmid; ?>&dat=<?php echo $dat; ?>&cust_id=<?php  echo $cust_id; ?>" class="btn btn-primary">Bill More</a></td>
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