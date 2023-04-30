<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<b><font color="#FFFFFF"><a href="login.php" style="color:#FFFFFF; ">Login</a></font></b>
    <div class="main">
        <div class="container">
            <div class="signup-content">
			
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
				 <?php include('val.php'); ?>
  <?php include('dbconnect.php');
  $sql=" select max(customer_id) as cid from customer_details ";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  $cust_id=$row['cid']+1;
  $cust_code='CUST'.$cust_id;
  ?>
                    <form method="POST" id="formID" class="register-form" action="customer_detail_insert.php" >
                        <h2> registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="customer_name" id="name" class="form-control validate[required,custom[onlyLetter]]">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="customer_address" id="customer_address" class="form-control validate[required]">
                        </div>
						   <div class="form-group">
                            <label for="address">City :</label>
                            <input type="text" name="customer_city" id="customer_city" class="form-control validate[required,custom[onlyLetter]]">
                        </div>
                      
                      
                        <div class="form-group">
                            <label for="birth_date">Contact No. :</label>
                            <input type="text" name="contact_no" id="contact_no" class="form-control validate[required,custom[mobile]]">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Email-id :</label>
                            <input type="email" name="email_id" id="email_id" class="form-control validate[required,custom[email]]">
                        </div>
                
                        <div class="form-group">
                            <label for="email">Customer Code / Username </label>
                            <input type="text" readonly="" value="<?php echo $cust_code; ?>" name="customer_code" id="customer_code" />
                        </div>
						
						<div class="form-group">
                            <label for="email">Password</label>
                            <input type="password" name="pwd" id="pwd" class="form-control validate[required]">
                        </div>
						
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>