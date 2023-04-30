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
          <h1><i class="fa fa-th-list"></i> Expenture Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	  <a href="expenditure_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
			<?php include('cal.php'); ?>
			  <form name="form1" method="post" action="date_expenditure_view.php">
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
    <td>Expenditure Name </td>
    <td>Description</td>
    <td>Total Amount </td>
    <td>Given To</td>
    <td>Vochuer No </td>
    <td>Given Date </td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
    </thead>
  <tbody>
  <?php
  include('dbconnect.php');
  $sql=" select * from expenditure  where given_date between '$date1' and '$date2'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['expenditure_id'];?></td>
    <td>&nbsp;<?php echo $row['expenditure_name'];?></td>
    <td>&nbsp;<?php echo $row['description'];?></td>
    <td>&nbsp;<?php echo $row['total_amount'];?></td>
    <td>&nbsp;<?php echo $row['given_to'];?></td>
    <td>&nbsp;<?php echo $row['voucher_no'];?></td>
    <td>&nbsp;<?php echo $row['given_date'];?></td>
    <td>&nbsp;<a href="expenditure_edit.php?ex_id=<?php echo $row['expenditure_id'];?>"><img src="../image/edit.jpg" width="40" height="40"></a></td>
    <td>&nbsp;<a href="expenditure_delete.php?ex_id=<?php echo $row['expenditure_id'];?>"onClick="return confirm('Are you sure want to delete')"><img src="../image/delete.png" width="30" height="30"></a></td>
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