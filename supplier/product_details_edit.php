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
                              Product Details <small></small>
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
                             Product Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php');?>

<?php
include('dbconnect.php');
$p_id=$_REQUEST['p_id'];
$sql="select * from product_details where product_id='$p_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form action="product_details_update.php" method="post"  name="formID"ID="formID">
<input type="hidden" name="p_id" value="<?php echo $row['product_id'];?>">

   <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Product Name </td>
      <td><input name="product_name" type="text" id="product_name" value="<?php echo $row['product_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Product Description </td>
      <td><textarea name="product_description" id="product_description" class="form-control validate[required]"><?php echo $row['product_description'];?></textarea> </td>
    </tr>
    <tr>
      <td>Product Image </td>
      <td><input name="product_image" type="file" id="product_image"></td>
    </tr>
    <tr>
      <td>Product Price </td>
      <td><input name="product_price" type="text" id="product_price" value="<?php echo $row['product_price'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
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
