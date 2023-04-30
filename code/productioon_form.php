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
                           Production <small></small>
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
                           Production
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<form name="formID" ID="formID" method="post" action="production_insert.php">
 <table width="453" height="220" border="0" align="center">
    <tr>
      <td>Product ID </td>
      <td> <select name="product_id" id="product_id" class="form-control validate[required]">  
	  <option value="">Select a Product</option>
	    <?php
   include('dbconnect.php');
  $sql1=" select * from product_details ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['product_id'];?>"><?php echo $row1['product_name'];?></option>
  <?php
  }
  ?>
	  </select> </td>
    </tr>
    <tr>
      <td>Total Production </td>
      <td><input name="total_production" type="text" id="total_production" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="description" type="text" id="description" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Production Date </td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['production_date']))
      {
        $date_default =$row['production_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("production_date", true, false);
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
      <td colspan="2">      <input name="Submit" type="submit" value="Submit"  class="btn btn-success btn">
      <input name="Reset" type="reset" value="Reset"  class="btn btn-danger"></td>
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

