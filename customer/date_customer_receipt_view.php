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
          <h1><i class="fa fa-th-list"></i> Customer Receipt Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	  <a href="Customer_receipt_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
			<?php include('cal.php'); ?>
			  <form name="form1" method="post" action="date_customer_receipt_view.php">
			    <table  class="table table-hover table-bordered">
                  <tr>
                    <td>Select From Date: </td>
                    <td><?php					
      $date_default =date('Y-m-d');
     
     



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
                    <td>Select To Date : </td>
                    <td><?php					
      
         $date_default =date('Y-m-d');
    


	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
                    <td><input type="submit" name="Submit" value="Submit"></td>
                  </tr>
                </table>
		            			  </form>
			  <?php
			  $date1=$_POST['date1'];
			  $date2=$_POST['date2'];
			  ?>
			   <b>From Date : <?php echo $date1; ?>&nbsp;&nbsp; To Date : <?php echo $date2; ?></b>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <td>Id</td>
    <td>Customer Name </td>
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
  $sql=" select * from customer_receipts cr,customer_details cd where cr.customer_id=cd.customer_id and cr.Date between '$date1' and '$date2' ";
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
    <td>&nbsp;<a href="customer_receipt_edit.php?cr_id=<?php echo $row['customer_receipts_id'];?>"><img src="../image/edit.jpg" width="40" height="40"></a></td>
    <td>&nbsp;<a href="customer_receipt_delete.php?cr_id=<?php echo $row['customer_receipts_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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