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
          <h1><i class="fa fa-edit"></i> Vendor Details</h1>
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
$v_id=$_REQUEST['v_id'];
$sql="select * from vendor_details where vendor_id='$v_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form  name="formID" ID="formID" method="post" action="vendor_details_update.php">
<input type="hidden" name="v_id" value="<?php echo $row['vendor_id'];?>">
  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Vendor Name </td>
      <td><input name="vendor_name" type="text" id="vendor_name" value="<?php echo $row['vendor_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Vendor Address</td>
      <td><textarea name="vendor_address" id="vendor_address" class="form-control validate[required]"><?php echo $row['vendor_address'];?></textarea></td>
    </tr>
    <tr>
      <td>Vendor City </td>
      <td><input name="vendor_city" type="text" id="vendor_city" value="<?php echo $row['vendor_city'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Contact No</td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>E-mail -Id</td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Vendor Code </td>
      <td><input name="vendor_code" type="text" id="vendor_code" value="<?php echo $row['vendor_code'];?>"class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>GST -No </td>
      <td><input name="  gst_no" type="text" id="  gst_no" value="<?php echo $row['gst_no'];?>" class="form-control validate[required]"></td>
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