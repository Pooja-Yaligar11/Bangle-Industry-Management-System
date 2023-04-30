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
          <h1><i class="fa fa-edit"></i> Employee Salary Form</h1>
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

<form name="formID" ID="formID" method="post" action="employee_salary_insert.php">
  
  <table width="384" height="542" border="0" align="center">
    <tr>
      <td width="137">Empolyee Name </td>
      <td width="125"><select name="employee_id" id="employee_id"  class="form-control validate[required]">
	    <?php
  include('dbconnect.php');
  $sql=" select * from  employee_details ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <option value="<?php echo $row['employee_id']; ?>"><?php echo $row['employee_name']; ?></option>
  <?php
  }
  ?>
      </select></td>
    </tr>
   
    <tr>
      <td>Working Days </td>
      <td><input name="working_days" type="text" id="working_days" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
      <tr>
      <td>worked Days </td>
      <td><input name="worked_days" type="text" id="worked_days" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Ot Days </td>
      <td><input name="ot_days" type="text" id="ot_days" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Other Charges </td>
      <td><input name="other_charges" type="text" id="other_charges" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>PF </td>
      <td><input name="pf" type="text" id="pf" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
	 <tr>
      <td>Month </td>
      <td><input name="month" type="text" id="month" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
	 <tr>
      <td>Year </td>
      <td><input name="year" type="text" id="year" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
	 <tr>
      <td>Date </td>
      <td><input name="date" type="text" id="date" class="form-control validate[required,custom[date]]"></td>
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