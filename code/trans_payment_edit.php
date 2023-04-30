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
                              Transportation Payment Details <small></small>
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
                             Transportation Payment Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$tp_id=$_REQUEST['tp_id'];
$sql="select * from transportation_payment where transportation_payment_id='$tp_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
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
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
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

