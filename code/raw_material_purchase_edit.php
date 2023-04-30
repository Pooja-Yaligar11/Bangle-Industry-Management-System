<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
     <?php include('cal.php'); ?>
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Raw Material Purchase <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Raw Material Purchase
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$rp_id=$_REQUEST['rp_id'];
$sql="select * from raw_material_purchase  where raw_material_purchase_id='$rp_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
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
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
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
	  ?></td>
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

