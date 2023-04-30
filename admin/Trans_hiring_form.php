<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?><?php include('cal.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Transportation Hiring Details </h1>
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
<form name="formID" ID="formID" method="post" action="trans_hiring_insert.php">
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
   <option value="<?php echo $row1['transportation_id'];?>">;<?php echo $row1['transportation_name'];?></option>
  <?php
  }
  ?>
	</select>
	</td>
    </tr>
    <tr>
      <td>From Route </td>
      <td><input name="from_route" type="text" id="from_route"  class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>To Route </td>
      <td><input name="to_route" type="text" id="to_route"  class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>No Of Km </td>
      <td><input name="no_of_km" type="text" id="no_of_km"  class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Product Id </td>
      <td> <select name="product_id" id="product_id" class="form-control validate[required]">  
	  <option value="">Select a Product</option>
	    <?php
   include('dbconnect.php');
  $sql1=" select * from product_details ";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row1['product_id'];?>"><?php echo $row1['product_name'];?></option>
  <?php
  }
  ?>
	  </select> </td>>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity"  class="form-control validate[required,custom[onlyNumber]]"></td>
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
      <td><input name="charges" type="text" id="charges"  class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
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