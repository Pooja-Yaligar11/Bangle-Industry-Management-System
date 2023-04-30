<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?> 
	
  <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
					<div id="divToPrint">
						  <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Bill Master</h1>
          <p>form</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><A href="home.php"><i class="fa fa-home fa-lg"></i></A></li>
        
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <br/>
            <div class="tile-body">

	 
 <?php
	 include('dbconnect.php');


$bmid=$_REQUEST["bmid"];

$dat=$_REQUEST["dat"];
$cust_id=$_REQUEST["cust_id"];




?>


<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
						<thead>
    <tr>
      <th width="47">Bill No 
			
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmid; ?>" size="5" readonly=""></th>
      <th width="53"><div align="right">Date 
            <input name="date" type="text" readonly=""  value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td><b>Company Details</b>
        
        
		  <?php
		  $sql="select * from customer_details where customer_id='$cust_id'";
		$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
		?>
		
		<p>Company Name : <b><?php echo $row["customer_name"] ?></b></p>
		Company Phone : <b><?php echo $row["contact_no"] ?></b>
		</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <table class="table table-striped">
						<thead>
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
      <th>Qnt</th>
      <th>Total</th>
    </tr>
	</thead>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		$sql3="select * from bill_details bd,product_details p where bd.product_id=p.product_id and bd.bill_master_id='$bmid' ";
		$res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
		{
		$slno=$slno+1;
		$bill_id=$row3["bill_details_id"];
		$pid=$row3["product_id"];
		
		 $qnt=$row3["quantity"];
		 $rate=$row3["rate"];
		 $dic=$row3["discount"];
		 $pname=$row3["product_name"];
		 
		$tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 $total=$total+$tot;
		 $vat=($total*18)/118;
		 $gtotal=($total+$vat)-$discount;	
		?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<?php echo $tot; ?></td>
     
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="4"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total; ?><b></th>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="4"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>GST</b></div></td>
      <td>&nbsp;<b><?php echo round($vat); ?></b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="4"><div align="right"><b>Total Purchase Amount </b></div></th>
      <th>&nbsp;<b><?php echo round($gtotal); ?><b></th>
      <td>&nbsp;</td>
    </tr>
  </table>
   
  <input type="button" value="Print" onClick="PrintDiv();">
</div>

           
          </div>
        </div>
        
       
    </main>
	</div>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>
  </body>
</html>