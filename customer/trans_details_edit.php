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
          <h1><i class="fa fa-edit"></i> Transportation Details</h1>
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
$td_id=$_REQUEST['td_id'];
$sql="select * from transportation_details where transportation_id='$td_id' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form  name="formID" ID="formID" method="post" action="Trans_detail_update.php">
<input type="hidden" name="td_id" value="<?php echo $row['transportation_id'];?>">

   <table width="423" height="198" border="0" align="center">
    <tr>
      <td>Transportation Name </td>
      <td><input name="transportation_name" type="text" id="transportation_name" value="<?php echo $row['transportation_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Transportation Address      </td>
      <td><textarea name="transportation_address" id="transportation_address" class="form-control validate[required]"><?php echo $row['transportation_address'];?></textarea></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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