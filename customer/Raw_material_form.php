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
          <h1><i class="fa fa-edit"></i>Row Material</h1>
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
<form name="formID" ID="formID" method="post" action="raw_material_insert.php">
 <table width="453" height="220" border="0" align="center">
    <tr>
      <td>Raw Material Name</td>
      <td><input name="raw_material_name" type="text" id="raw_material_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Raw Material Description </td>
      <td><input name="raw_material_description" type="text" id="raw_material_description" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2">      <input type="submit" name="Submit" value="Submit"  class="btn btn-success btn">        <input type="reset" name="Reset" value="Reset"  class="btn btn-danger"></td>
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