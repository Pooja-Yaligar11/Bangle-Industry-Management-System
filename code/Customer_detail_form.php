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
<form name="formID"  ID="formID" method="post" action="customer_detail_insert.php">
     <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Customer Name </td>
      <td><input name="customer_name" type="text" id="customer_name" class="form-control validate[required,custom[onlyLetter]]"></td>
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
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no"class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id"class="form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Customer Code </td>
      <td><input name="customer_code" type="text" id="customer_code"class="form-control validate[required,custom[onlyNumber]]"></td>
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
