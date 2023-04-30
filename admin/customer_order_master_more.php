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
          <h1><i class="fa fa-edit"></i> Customer Order Details</h1>
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
<script type="text/javascript">
<!-- Begin
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
tot=(parseInt(document.formID.rate.value) * parseInt(document.formID.qnt.value));
dic=(parseInt(document.formID.dic.value));
total=(tot-dic);
document.formID.total.value=total;
}
function stopCalc(){
  clearInterval(interval);
}
//  End -->
</script>

 <?php
	include('dbconnect.php');

$pmid=$_REQUEST["pmid"];
$cust_id=$_REQUEST["c_id"];
$su_id=0;
//if(cust_id!=null)
//{
 //su_id=Integer.parseInt(cust_id);
//}
$pmi=0;
$pm_id=0;
if($pmid=='')
{
$sql="select max(customer_order_master_id) from    customer_order_master";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

 $pmi=$row[0];
$pmi=$pmi+1;
}
else
{
// pm_id=Integer.parseInt(pmid);

  $pmi=$pmid+0;
}



$dat=date('Y-m-d');
?>

<form name="formID" ID="formID" method="post" action="customer_order_master_insert.php">
 <table class="table table-striped table-bordered table-hover"    >
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="pmid" type="text" id="pmid" value="<?php echo $pmi; ?>" size="5" readonly=""></th>
      <th width="53%" colspan="3"><div align="right">Date 
            <input name="date" type="text" value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td colspan="2">Customer
        <select name="customer_id" id="customer_id"  class="validate[required]" >
         
		  <?php
		 
		  $sql1="select * from customer_details where customer_id='$cust_id'";
		  $res1=mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_array($res1))
			{
		
		?>
		  <option value="<?php echo $row1["customer_id"]; ?>" ><?php echo $row1["customer_name"]; ?></option>
		  <?php
		}?>
        </select> </td><td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
     
     
    
    
   
    </tr>
    <tr>
     
   
 
    </tr>
  </table>
  <p>&nbsp;  </p>
 <table class="table table-bordered table-hover tablesorter"  id="demo-dtable-01"  >
    <tr>
      <th>Sl NO</th>
      <th>Raw Material Name </th>
     
      <th>Qnt</th>
	   <th>Status</th>
	    <th>Not Stock</th>
	    <th>Confirm</th>
    
      <th>Cancel</th>
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		 $sql3="select * from  customer_order_details pd, product_details p where pd.product_id=p.product_id and pd.customer_order_master_id='$pmid' ";
		 $res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
		{
		$slno=$slno+1;
		$pur_id=$row3["customer_order_master_id"];
		$pid=$row3["product_id"];
		
		 $qnt=$row3["quantity"];
		// $rate=$row3["rate"];
		// $dic=$row3["discount"];
		 $pname=$row3["product_name"];
		 
		// $tot=($rate*$qnt);
		// $discount=$discount+$dic;
		// $total=$total+$tot;
		// $vat=($total*18)/118;
		// $gtotal=($total+$vat)-$discount;?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
    
      <td>&nbsp;<?php echo $qnt; ?></td>
	   <td>&nbsp;<a href="#" <?php if($row3["cust_order_status"]=='Pending') { ?> class="btn btn-warning" <?php } ?>
	   <?php if($row3["cust_order_status"]=='Confirmed') { ?> class="btn btn-success" <?php } ?>
	   <?php if($row3["cust_order_status"]=='No Stock') { ?> class="btn btn-danger" <?php } ?>
	    > 
	   
	   <?php echo $row3["cust_order_status"]; ?></a></td>
	    <td><a href="order_not_confirm.php?cod_id=<?php echo $row3["customer_order_details_id"]; ?>&pmid=<?php echo $pmid; ?>&cust_id=<?php echo $cust_id; ?>" title=" <?php echo $slno; ?>" class="btn btn-primary" >No Stock</a></td>
		 <td>&nbsp;<a href="order_confirm.php?cod_id=<?php echo $row3["customer_order_details_id"]; ?>&pmid=<?php echo $pmid; ?>&cust_id=<?php echo $cust_id; ?>" title=" <?php echo $slno; ?>" class="btn btn-primary" >Confirm</a></td>
    
      <td>&nbsp;<a href="customer_order_details_delete.php?pur_id=<?php echo $pur_id; ?>&pmid=<?php echo $pmid; ?>&cust_id=<?php echo $cust_id; ?>&p_id=<?php echo $pid; ?>&qnt=<?php echo $qnt; ?>" class="btn btn-primary" title=" <?php echo $slno; ?>" >Delete</a></td>
    </tr>
    
	<?php
	}?>
	
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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

