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
                               Expenditure <small></small>
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
                                Expenditure
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>
<?php
include('dbconnect.php');
$ex_id=$_REQUEST['ex_id'];
$sql="select * from expenditure where expenditure_id='$ex_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>

<form name="formID"ID="formID" method="post" action="expenditure_update.php">
<input type="hidden" name="ex_id" value="<?php echo $row['expenditure_id'];?>">

  <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Expenditure Name </td>
      <td><input name="expenditure name" type="text" id="expenditure name" value="<?php echo $row['expenditure_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['description'];?>"class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Total Amount </td>
      <td><input name="total amount" type="text" id="total amount" value="<?php echo $row['total_amount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Given To</td>
      <td><input name="given to" type="text" id="given to" value="<?php echo $row['given_to'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Vochur No </td>
      <td><input name="voucher_no" type="text" id="voucher_no" value="<?php echo $row['voucher_no'];?>" class="form-control validate[required]]"></td>
    </tr>
   <tr>
      <td>Given Date </td>
      <td><input name="given_date" type="text" id="given_date" value="<?php echo $row['given_date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset"class="btn btn-danger btn" ></td>
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
