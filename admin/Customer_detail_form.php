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
          <h1><i class="fa fa-edit"></i> Comant Details</h1>
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
<form name="formID"  ID="formID" method="post" action="customer_detail_insert.php">
     <table width="456" height="372" border="0" align="center">
    <tr>
      <td width="180">Customer Name </td>
      <td width="266"><input name="customer_name" type="text" id="customer_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Customer Address </td>
      <td><input name="customer_address" type="text" id="customer_address" class="form-control validate[required]" ></td>
    </tr>
    <tr>
      <td>Customer City</td>
      <td><input name="customer_city" type="text" id="customer_city" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Customer No </td>
      <td><input name="contact_no" type="text" id="contact_no"class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id"class="form-control validate[required,custom[email]]"></td>
    </tr>
	 <?php
  include('dbconnect.php');
  $sql=" select max(customer_id) as cid from customer_details  ";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
 
 $cid=$row['cid']+1;
 
 $c_code="CUST".$cid;
  ?>
    <tr>
      <td>Customer Code </td>
      <td><input name="customer_code" type="text" id="customer_code" value="<?php echo $c_code; ?>" class="form-control validate[required]" readonly=""></td>
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