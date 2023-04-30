<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?> <?php include('cal.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Expenditure Details</h1>
          <p>form</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><A href="home.php"><i class="fa fa-home fa-lg"></i></A></li>
        
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <br/>
            <div class="tile-body">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$ex_id=$_REQUEST['ex_id'];
$sql="select * from expenditure where expenditure_id='$ex_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form name="formID"ID="formID" method="post" action="expenditure_update.php">
<input type="hidden" name="ex_id" value="<?php echo $row['expenditure_id'];?>">

  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Expenditure Name </td>
      <td><input name="expenditure name" type="text" id="expenditure name" value="<?php echo $row['expenditure_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['description'];?>"class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Total Amount </td>
      <td><input name="total amount" type="text" id="total amount" value="<?php echo $row['total_amount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Given To</td>
      <td><input name="given to" type="text" id="given to" value="<?php echo $row['given_to'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Vochur No </td>
      <td><input name="voucher_no" type="text" id="voucher_no" value="<?php echo $row['voucher_no'];?>" class="form-control validate[required]]"></td>
    </tr>
   <tr>
      <td>Given Date </td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['given_date']))
      {
        $date_default =$row['given_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("given_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>	</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset"class="btn btn-danger btn" ></td>
    </tr>
  </table>
</form>
</div>

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>
  </body>
</html>