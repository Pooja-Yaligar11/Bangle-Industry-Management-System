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
          <h1><i class="fa fa-edit"></i> Customer Details</h1>
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
$c_id=$_REQUEST['c_id'];
$sql="select * from customer_details where customer_id='$c_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form name="formID" ID="formID" method="post" action="customer_details_update.php">
<input type="hidden" name="c_id" value="<?php echo $row['customer_id'];?>">

     <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Customer Name </td>
      <td><input name="customer_name" type="text" class="form-control validate[required,custom[onlyLetter]]" id="customer_name" value="<?php echo $row['customer_name'];?>"></td>
    </tr>
    <tr>
      <td>Customer Address </td>
      <td><input name="customer_address" type="text" class="form-control validate[required]" id="customer_address" value="<?php echo $row['customer_address'];?>"></td>
    </tr>
    <tr>
      <td>Customer City</td>
      <td><input name="customer_city" type="text" class="form-control validate[required,custom[onlyLetter]]" id="customer_city" value="<?php echo $row['customer_city'];?>"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" class="form-control validate[required,custom[mobile]]" id="contact_no" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id" class="form-control validate[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td>Customer Code </td>
      <td><input name="customer_code" type="text" class="form-control validate[required]" id="customer_code" value="<?php echo $row['customer_code'];?>"></td>
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