<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Production Details</h1>
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
<?php include('val.php');?><?php
include('dbconnect.php');
$pr_id=$_REQUEST['pr_id'];
$sql="select * from production where production_id='$pr_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="formID" ID="formID" method="post" action="production_update.php">
<input type="hidden" name="pr_id" value="<?php echo $row['production_id'];?>">
 <table width="453" height="220" border="0" align="center">
    <tr>
      <td>Product ID </td>
       <td> <select name="product_id" id="product_id">  
	  <option value="">Select a Product</option>
	    <?php
   include('dbconnect.php');
  $sql1=" select * from product_details ";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['product_id'];?>"<?php if($row1['product_id']==$row['product_id']){?> selected <?php } ?>><?php echo $row1['product_name'];?></option>
  <?php
  }
  ?>
	  </select></td>
    </tr>
    <tr>
      <td>Total Production </td>
      <td><input name="total_production" type="text" id="total_production" value="<?php echo $row['total_production'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['description'];?>" class="form-control validate[required]"></td>
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
	  ?>	</td>
    </tr>
    <tr>
      <td colspan="2">      <input name="Submit" type="submit" value="Submit"   class="btn btn-success btn">
      <input name="Reset" type="reset" value="Reset"  class="btn btn-danger"></td>
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
