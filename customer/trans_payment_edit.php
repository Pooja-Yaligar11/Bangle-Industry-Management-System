<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>  <?php include('cal.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Transportation PAyment Details</h1>
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
$tp_id=$_REQUEST['tp_id'];
$sql="select * from transportation_payment where transportation_payment_id='$tp_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form  name="formID" ID="formID" method="post" action="Trans_payment_update.php">
<input type="hidden" name="tp_id" value="<?php echo $row['transportation_payment_id'];?>">

  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Transportation Id </td>
    <td>   <select name="transportation_id"  id="transportation_id" class="form-control validate[required]">
	  <option value="">Select a Transportation</option>
	   <?php
     include ('dbconnect.php');
  $sql1=" select * from transportation_details";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
   <option value="<?php echo $row1['transportation_id'];?>" <?php if($row1['transportation_id']==$row['transportation_id']){?> selected <?php } ?>><?php echo $row1['transportation_name'];?></option>
  <?php
  }
  ?>
  
	  </select>
	  </td>
    </tr>
    <tr>
      <td>Given Amount </td>
      <td><input name="given_amount" type="text" id="given_amount" value="<?php echo $row['given_amount']; ?>" class="form-control validate[required,custom[onlyNumber]]"></td>
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
	  ?>
      </td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" id="description" class="form-control validate[required]"> <?php echo $row['description']; ?></textarea></td>
    </tr>
    <tr>
      <td height="23" colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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