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
                           Transportation Hiring Details <small></small>
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
                            Transportation Hiring Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$tr_id=$_REQUEST['tr_id'];
$sql="select * from transportation_hiring where transportation_hiring_id='$tr_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<form  name="formID" ID="formID" method="post" action="trans_hiring_update.php">
<input type="hidden" name="tr_id" value="<?php echo $row['transportation_hiring_id'];?>">

    <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Transportation Id </td>
   <td>  <select name="transportation_id"  id="transportation_id" class="form-control validate[required]">
	  <option value="">Select a Transportation</option>
	   <?php
	    include ('dbconnect.php');
  $sql1=" select * from transportation_details";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
   <option value="<?php echo $row1['transportation_id'];?>"<?php if($row1['transportation_id']==$row['transportation_id']){?> selected <?php } ?>><?php echo $row1['transportation_name'];?></option>
  <?php
  }
  ?>
    </select>
	</td>
    </tr>
    <tr>
      <td>From Route </td>
      <td><input name="from_route" type="text" id="from_route" value="<?php echo $row['from_route'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>To Route </td>
      <td><input name="to_route" type="text" id="to_route" value="<?php echo $row['to_route'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>No Of Km </td>
      <td><input name="no_of_km" type="text" id="no_of_km" value="<?php echo $row['no_of_km'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Product Id </td>
      <td> <select name="product_id" id="product_id" class="form-control validate[required]">  
	  <option value="">Select a Product</option>
	    <?php
   include('dbconnect.php');
  $sql1=" select * from product_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['product_id'];?>">;<?php echo $row1['product_name'];?></option>
  <?php
  }
  ?>
	  </select> </td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $row['quantity'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
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
      <td>Charge</td>
      <td><input name="charges" type="text" id="charges" value="<?php echo $row['charges'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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

