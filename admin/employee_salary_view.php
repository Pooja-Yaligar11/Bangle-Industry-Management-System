<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Employee Salary Details </h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"?><i class="fa fa-home fa-lg"></i> </a></li>
          
        </ul>
      </div>
	  <a href="employee_salary_form.php" class="btn btn-primary">Add New Details</a><hr/>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

      <td>ID</td>
      <td>Employee Name </td>
      <td>Basic salary </td>
       <td>Worked Days</td>
      <td>OT Days </td>
      <td>Other Charges </td>
	   <td>Gross Salary </td>
      <td>PF </td>
	  <td>Net Salary </td>
      <td>Month/Year </td>
      <td>Date</td>
      <td>Delete</td></tr>
  </thead>
  <tbody>
	<?php
  include('dbconnect.php');
  $sql="select * from emp_salary es,employee_details ed where es.employee_id=ed.employee_id" ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $gross_salary=($row['basic_sal']*$row['worked_days'])+$row['ot_days']+$row['other_charges'];
  
  $net_salary=$gross_salary-$row['pf'];
  ?>
  
    <tr>
      <td>&nbsp;<?php echo $row['salary_id'];?></td>
	  <td>&nbsp;<?php echo $row['employee_name'];?></td>
      <td>&nbsp;<?php echo $row['basic_sal'];?></td>
  
      <td>&nbsp;<?php echo $row['worked_days'];?></td>
	  
      <td>&nbsp;<?php echo $row['ot_days'];?></td>
      <td>&nbsp;<?php echo $row['other_charges'];?></td>
	  <td>&nbsp;<?php echo $gross_salary;?></td>
      <td>&nbsp;<?php echo $row['pf'];?></td>
	   <td>&nbsp;<?php echo $net_salary;?></td>
      <td>&nbsp;<?php echo $row['month'];?>-<?php echo $row['year'];?></td>
	  
      <td>&nbsp;<?php echo $row['salary_date'];?></td>
      <td>&nbsp;<a href="employee_sal_delete.php?sal_id=<?php echo $row['salary_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger">Delete</a></td>
    </tr>
	<?php
	}
	?>
           </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>
  </body>
</html>