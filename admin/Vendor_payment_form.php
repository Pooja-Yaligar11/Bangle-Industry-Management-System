<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->    <?php include('cal.php'); ?>
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Vendor Payment</h1>
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
  $vendor_id=$_POST['vendor_id'];
	   include ('dbconnect.php');
  $sql="select * from vendor_details where vendor_id='$vendor_id'";
  $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
  ?>
<form name="formID" ID="formID" method="post" action="vendor_payment_insert.php">
   <table width="492" height="394" border="0" align="center">
    <tr>
      <td>Vendor </td>
     <td><select name="vendor_id"  id="vendor_id" class="form-control validate[required]">
	  
	   <?php
	 
  $sql1="select * from vendor_details where vendor_id='$vendor_id'";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
   <option value="<?php echo $row1['vendor_id'];?>"><?php echo $row1['vendor_name'];?></option>
  <?php
  }
  ?>
  </select></td>
    </tr>
    <tr>
      <td>Raw Purchase Amount </td>
	<?php
	$rpa=0;
	     $sql2="select * from vendor_details vd,raw_material_purchase rd, raw_material_purchase_details rp where rd.vendor_id=vd.vendor_id and rd.raw_material_purchase_id=rp.raw_material_purchase_id and vd.vendor_id='$vendor_id'";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  $totrp=$row2['quantity']*$row2['rate'];
  $gst=($totrp1*18)/118;
  $totrp=$totrp1+$gst;
  $rpa=$rpa+$totrp;
  }
  ?>
      <td>&nbsp;<?php echo $rpa; ?></td>
    </tr>
	<?php
	$amount=0;
	     $sql3="select * from vendor_details vd, vendor_payment vp where vd.vendor_id=vp.vendor_id and vd.vendor_id='$vendor_id'";
  $res3=mysqli_query($conn,$sql3);
  while($row3=mysqli_fetch_array($res3))
  {
  $amount=$amount+$row3['amount'];
 
  }
  $bal=$rpa-$amount;
  ?>
    <tr>
      <td>Vendor Payment </td>
      <td>&nbsp;<?php echo $amount; ?></td>
    </tr>
    <tr>
      <td>Balance</td>
      <td>&nbsp;<b><font color="#FF0000"><?php echo $bal; ?></font></b></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Narration</td>
      <td><input name="narration" type="text" id="narration" class="form-control validate[required]"></td>
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
	  $myCalendar->dateAllow("$date_default","2025-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(date('Y'), 2025);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td colspan="2">      <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input name="Reset" type="reset" value="Reset" class="btn btn-danger btn"></td>
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