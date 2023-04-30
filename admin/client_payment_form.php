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
          <h1><i class="fa fa-edit"></i> Form Samples</h1>
          <p>Sample forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
<form name="form1" ID="formID" method="post" action="client_payment_insert.php">
  <table width="333" height="423" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Client Payment </div></td>
    </tr>
    <tr>
      <td><div align="center">Client ID </div></td>
      <td><div align="center">
        <select name="client_id" id="client_id"  class="form-control validate[required]">
		<option value="select">select</option>
		<?php
		include('db_connect.php');
		$sql="select * from client";
		$r=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($r))
		{
		?>
		<option value="<?php echo $row['client_id'];?>"><?php echo $row['client_name'];?></option>
		<?php
		}
		?>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Description</div></td>
      <td><div align="center">
        <textarea name="description" id="description"  class="form-control validate[required,custom[onlyNumber]]"></textarea>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Type </div></td>
      <td><div align="center">
        <select name="p_type" id="p_type"  class="form-control validate[required,custom[onlyNumber]]">
          <option>select</option>
          <option>Development</option>
          <option>Renewal</option>
          <option>Hosting</option>
          <option>SMS</option>
          <option>Development/Hosting</option>
          <option>SEO</option>
          <option>Services</option>
          <option>Other</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Mode </div></td>
      <td><div align="center">
        <select name="p_mode" id="p_mode"  class="form-control validate[required,custom[onlyNumber]]">
          <option>select</option>
          <option>Cash</option>
          <option>Check</option>
          <option>DD</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Bank Name </div></td>
      <td><div align="center">
        <input name="bank_name" type="text" id="bank_name"  class="form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Chech/DD Number </div></td>
      <td><div align="center">
        <input name="check_dd" type="text" id="check_dd"  class="form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Amount</div></td>
      <td><div align="center">
        <input name="amount" type="text" id="amount"  class="form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Chech Date </div></td>
      <td><div align="center">
        <input name="check_date" type="date" id="check_date"  class="form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Date </div></td>
      <td><div align="center">
        <input name="pay_date" type="date" id="pay_date"  class="form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
 </div>

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('footer.php');?>
<?php include('val.php');?>
  </body>
</html>