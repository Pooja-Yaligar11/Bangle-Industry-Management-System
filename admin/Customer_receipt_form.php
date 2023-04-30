<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu--> <?php include('cal.php'); ?>
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Customer Receipt</h1>
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
$customer_id=$_POST['customer_id'];
?>
<form name="formID" ID="formID" method="post" action="customer_recepit_insert.php">
  <table width="423" height="468" border="0" align="center">
    <tr>
      <td>Customer	 Name </td>
      <td>   <select name="customer_id"  id="customer_id" class="form-control validate[required]" >
	  
	    <?php
    include('dbconnect.php');
  $sql1=" select * from customer_details  where customer_id='$customer_id'";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
     <option value="<?php echo $row1['customer_id'];?>"><?php echo $row1['customer_name'];?></option>
  <?php
  }
  ?>
  </select> </td>
    </tr>
	
	<?php
	$bill_tot=0;
	   $sql2=" select * from customer_details  cd,  bill_master bm, bill_details bd where cd.customer_id=bm.customer_id and bm.bill_master_id=bd.bill_master_id and bm.customer_id='$customer_id'";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
   $quantity=$row2['quantity'];
   $rate=$row2['rate'];
   $t=($quantity*$rate)-$discount;
   $gst=($t*18)/118;
   $bill_tot=$bill_tot+($t+$gst);
   
  }
	?>
    <tr>
      <td>Bill Amount </td>
      <td>&nbsp;<b><?php echo  round($bill_tot); ?></b></td>
    </tr>
	
	<?php
	  $sql3=" select sum(amount) as su from customer_details  cd, customer_receipts cr where cd.customer_id=cr.customer_id and  cr.customer_id='$customer_id'";
  $res3=mysqli_query($conn,$sql3);
  $row3=mysqli_fetch_array($res3);
  
	?>
    <tr>
      <td>Paid Amount </td>
      <td>&nbsp;<b><?php echo $row3['su'];?></b></td>
    </tr>
	<?php
	$bal=round($bill_tot)-$row3['su'];
	?>
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
      <td><input name="narration" type="text" id="narration" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr
    ><tr>
      <td>Date</td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['Date']))
      {
        $date_default =$row['Date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("Date", true, false);
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
      <td colspan="2"><input name="Submit" type="submit" value="Submit" class="btn btn-success btn">
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