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
<form action="procuct_details_insert.php" enctype="multipart/form-data" method="post"  name="formID" ID="formID">
   <table width="455" height="229" border="0" align="center">
    <tr>
      <td>Product Categry </td>
      <td><select name="product_category_id" id="product_category_id" class="form-control validate[required]">
        <option value="">Select a Product</option>
        <?php
    include('dbconnect.php');
  $sql1=" select * from product_category ";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['product_category_id'];?>"><?php echo $row1['product_category_name'];?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Product Name </td>
      <td><input name="product_name" type="text" id="product_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
   	
    <tr>
      <td>Product Size </td>
      <td><input name="product_size" type="text" id="product_size" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Product Type </td>
      <td><input name="product_type" type="text" id="product_type" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Product Description </td>
      <td><textarea name="product_description" id="product_description" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Product Image </td>
      <td><input name="product_image" type="file" id="product_image"></td>
    </tr>
    <tr>
      <td>Product Price </td>
      <td><input name="product_price" type="text" id="product_price"class="form-control validate[required,custom[onlyNumber]]"></td>
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