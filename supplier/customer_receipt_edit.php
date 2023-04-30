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
                              Customer Receipt <small></small>
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
                            Customer Receipt
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?><?php
include('dbconnect.php');
$cr_id=$_REQUEST['cr_id'];
$sql="select * from customer_receipts where customer_receipts_id='$cr_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="formID"ID="formID" method="post" action="customer_recepit_update.php">
<input type="hidden" name="cr_id" value="<?php echo $row['customer_receipts_id'];?>">
  <table width="423" height="198" border="0" align="center">
    <tr>
     <td>Customer Id </td>
    <td>   <select name="customer_id" id="customer_id" class="form-control validate[required]">
	  <option value="">Select a Customer </option>
	    <?php
   include('dbconnect.php');
  $sql1=" select * from customer_details  ";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
  ?>
     <option value="<?php echo $row1['customer_id'];?>" <?php if($row1['customer_id']==$row['customer_id']){?> selected <?php } ?>><?php echo $row1['customer_name'];?></option>
  <?php
  }
  ?>
  </select> </td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" value="<?php echo $row['amount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Narration</td>
      <td><input name="narration" type="text" id="narration" value="<?php echo $row['narration'];?>"class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="text" id="date" value="<?php echo $row['Date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input name="Submit" type="submit" value="Submit" class="btn btn-success btn">
        <input name="Reset" type="reset" value="Reset" class="btn btn-danger btn"></td>
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
