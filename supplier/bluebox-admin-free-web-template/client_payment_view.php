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
                            Tables Page <small>Responsive tables</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Tables</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Id</th>
    <th>Client Id </th>
    <th>Description</th>
    <th>Payment Type</th>
    <th>Payment Mode</th>
    <th>Bank Name</th>
    <th>Chech/DD Number</th>
    <th>Amount</th>
    <th>Chech Date</th>
    <th>Payment Datele</th>
    <th>Edit</th>
    <th>delete</th>
  </tr>
  </thead>
<tbody>
  <?php
  include('db_connect.php');
  $sql="select * from client_payment cp, client c where cp.client_id=c.client_id " ;
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['client_pay_id']; ?></td>
    <td>&nbsp;<?php echo $row['client_name'];?></td>
    <td>&nbsp;<?php echo $row['description'];?></td>
    <td>&nbsp;<?php echo $row['payment_type'];?></td>
    <td>&nbsp;<?php echo $row['payment_mood'];?></td>
    <td>&nbsp;<?php echo $row['bank_name'];?></td>
    <td>&nbsp;<?php echo $row['chack_dd_number'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<?php echo $row['check_date'];?></td>
    <td>&nbsp;<?php echo $row['payment_date'];?></td>
    <td>&nbsp; <a href="client_payment_edit.php?client_pay_id=<?php echo $row['client_pay_id'];?>">edit</a></td>
    <td>&nbsp; <a href="client_payment_delete.php?client_pay_id=<?php echo $row['client_pay_id']; ?>">delete</a></td>
  </tr>
  <?php
  }
  ?>
    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           <?php include('footer.php');?>
          </body>
</html>
