<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->  <?php include('cal.php');?>

    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Row Material Purchase Details</h1>
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
$rp_id=$_REQUEST['rp_id'];
$sql="select * from raw_material_purchase  where raw_material_purchase_id='$rp_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form name="formID" ID="formID" method="post" action="raw_material_purchase_update.php">
<input type="hidden" name="rp_id" value="<?php echo $row['raw_material_purchase_id'];?>">

 <table width="453" height="220" border="0" align="center">
    <tr>
      <td>Vendor Id </td>
      <td> <select name="vendor_id"  id="vendor_id" class="form-control validate[required]">
	   <option value="">Select a vendor</option>
	   <?php
	   include('dbconnect.php');
  $sql1=" select * from vendor_details ";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
   <option value="<?php echo $row1['vendor_id'];?>"<?php if($row1['vendor_id']==$row['vendor_id']){?> selected <?php } ?>><?php echo $row1['vendor_name'];?></option>
  <?php
  }
  ?>
  </select> </td>
    </tr>
    <tr>
      <td>Date</td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date", true, false);
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
      <td colspan="2"><input type="submit" name="Submit" value="Submit"   class="btn btn-success btn">      <input type="reset" name="Reset" value="Reset"  class="btn btn-danger"></td>
    </tr>
  </table>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --><?php include('footer.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>

