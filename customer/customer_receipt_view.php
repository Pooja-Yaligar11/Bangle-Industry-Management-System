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
          <h1><i class="fa fa-th-list"></i> Company Receipt Details </h1>
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
    <td>Id</td>
    <td>Company Name </td>
    <td>Amount</td>
    <td>Narration</td>
    <td>Date</td>
  
  </tr>
  </thead>
  <tbody>
   <?php
  include('dbconnect.php');
  $tot=0;
  $uname=$_SESSION['uname'];
  $sql=" select * from customer_receipts cr,customer_details cd where cr.customer_id=cd.customer_id and cd.customer_code='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['amount'];
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_receipts_id'];?></td>
    <td>&nbsp;<?php echo $row['customer_name'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<?php echo $row['narration'];?></td>
    <td>&nbsp;<?php echo $row['Date'];?></td>
  
  </tr>
  <?php
  }
  ?>
   </tbody>
              </table>
			  <b>Total Receipt Amount Collection  : <?php echo $tot;?></b>
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