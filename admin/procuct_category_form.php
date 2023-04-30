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
<form action="procuct_category_insert.php" enctype="multipart/form-data" method="post"  name="formID" ID="formID">
   <table width="455" height="229" border="0" align="center">
    
    <tr>
      <td>Catgory  Name </td>
      <td><input name="product_category_name" type="text" id="product_category_name" class="form-control validate[required]"></td>
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