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
          <h1><i class="fa fa-edit"></i> Product Details</h1>
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
$p_id=$_REQUEST['p_id'];
$sql="select * from product_details where product_id='$p_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="product_details_update.php" enctype="multipart/form-data" method="post"  name="formID"ID="formID">
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

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>
  </body>
</html>