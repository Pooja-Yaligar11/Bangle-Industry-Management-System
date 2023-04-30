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

<form name="formID" ID="formID" method="post" action="Customer_receipt_form.php">
  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Customer Id </td>
    <td>   <select name="customer_id"  id="customer_id" class="form-control validate[required]" >
	  <option value="">Select a Customer </option>
	    <?php
    include('dbconnect.php');
  $sql1=" select * from customer_details  ";
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