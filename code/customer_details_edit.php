<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
    
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Customer Details <small></small>
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
                            Customer Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$c_id=$_REQUEST['c_id'];
$sql="select * from customer_details where customer_id='$c_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<form name="formID" ID="formID" method="post" action="customer_details_update.php">
<input type="hidden" name="c_id" value="<?php echo $row['customer_id'];?>">

     <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Customer Name </td>
      <td><input name="customer_name" type="text" id="customer_name" value="<?php echo $row['customer_name'];?>"></td>
    </tr>
    <tr>
      <td>Customer Address </td>
      <td><input name="customer_address" type="text" id="customer_address" value="<?php echo $row['customer_address'];?>"></td>
    </tr>
    <tr>
      <td>Customer City</td>
      <td><input name="customer_city" type="text" id="customer_city" value="<?php echo $row['customer_city'];?>"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td>Customer Code </td>
      <td><input name="customer_code" type="text" id="customer_code" value="<?php echo $row['customer_code'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
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
