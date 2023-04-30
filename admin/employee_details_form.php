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
          <h1><i class="fa fa-edit"></i> Employee Details</h1>
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

<form name="formID" ID="formID" method="post" action="employee_details_insert.php">
  
  <table width="384" height="389" border="0" align="center">
    <tr>
      <td width="137">Empolyee Name </td>
      <td width="125"><input name="employee_name" type="text" id="employee_name"  class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Empolyee Address </td>
      <td><textarea name="employee_address" id="employee_address"  class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Empolyee city </td>
      <td><input name="employee_city" type="text" id="employee_city"  class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="Male">
        Male 
          <input name="gender" type="radio" value="Female">
          Female </td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Empolyee Type </td>
      <td><input name="employee_type" type="text" id="employee_type" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Empolyee Designation </td>
      <td><input name="employee_designaton" type="text" id="employee_designaton" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Basic Salary </td>
      <td><input name="basic_salary" type="text" id="basic_salary" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit" class="btn btn-success btn"></td>
      <td><input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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