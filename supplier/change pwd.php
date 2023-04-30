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
                             Change Password<small></small>
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
                           Change Password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

						
						<?php include('val.php'); ?>
						
					<form name="form2" method="post" action="changepin.php">
<p>Old Password </p>
  <label>
  <input type="text" name="old_pwd">
  </label>
  <p>New password </p>
  <p>
    <label>
      <input type="text" name="new_pwd">
      </label>
	  <p>Confirm password </p>
  <p>
    <label>
      <input type="text" name="conf_pwd">
      </label>
  </p>


  <label>
  <input type="submit" name="Submit" value="Change" />
  </label>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --><?php include('footer.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>
