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
                             Forms Page <small>Best form elements.</small>
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
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                <!-- /.col-lg-6 (nested) -->
                      
                                    <h4>Form Validation States</h4>
                                    <h4>Input Groups</h4>
<form name="form1" method="post" action="client_payment_insert.php">

      <div class="form-group input-group">
        <span class="input-group-addon">Client Id</span>
											  <select name="client_id" id="client_id" class="form-control" placeholder="Username">
		<option value="select">select</option>
		<?php
		include('db_connect.php');
		$sql="select * from client";
		$r=mysql_query($sql);
		while($row=mysql_fetch_array($r))
		{
		?>
		<option value="<?php echo $row['client_id'];?>"><?php echo $row['client_name'];?></option>
		<?php
		}
		?>
        </select>
</div>
 <div class="form-group input-group">
        <span class="input-group-addon">Description</span>
        <textarea name="description" id="description" class="form-control" placeholder="Username"></textarea>
</div>

   <div class="form-group input-group">
        <span class="input-group-addon">Payment Type</span>
        <select name="p_type" id="p_type" class="form-control" placeholder="Username">
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
</div>

      <div class="form-group input-group">
        <span class="input-group-addon">Payment Modek</span>
        <select name="p_mode" id="p_mode" class="form-control" placeholder="Username">
          <option>select</option>
          <option>Cash</option>
          <option>Check</option>
          <option>DD</option>
        </select>
</div>
     <div class="form-group input-group">
        <span class="input-group-addon">Bank Name</span>
        <input name="bank_name" type="text" id="bank_name" class="form-control" placeholder="Username">
      </div>
	  
	<div class="form-group input-group">
        <span class="input-group-addon">Check </span>
        <input name="check_dd" type="text" id="check_dd" class="form-control" placeholder="Username">
      </div>
	  
      <div class="form-group input-group">
        <span class="input-group-addon">Amont</span>
        <input name="amount" type="text" id="amount" class="form-control" placeholder="Username">
      </div>
	  
      <div class="form-group input-group">
        <span class="input-group-addon">Date</span>
        <input name="check_date" type="date" id="check_date" class="form-control" placeholder="Username">
      </div>
	  
      <div class="form-group input-group">
        <span class="input-group-addon">Payment date</span>
        <input name="pay_date" type="date" id="pay_date" class="form-control" placeholder="Username">
      </div>
	  
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
    </tr>
  </table>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
   
</body>
</html>
