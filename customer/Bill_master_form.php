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


 
<script type="text/javascript">
<!-- Begin
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
tot=(parseInt(document.formID.rate.value) * parseInt(document.formID.qnt.value));
dic=(parseInt(document.formID.dic.value));
t=(tot-dic);
document.formID.total.value=t;

}
function stopCalc(){
  clearInterval(interval);
}
//  End -->
</script>

  <?php
	 include('dbconnect.php');

$bmid=$_REQUEST["bmid"];
$c_id=$_REQUEST["c_id"];


$bmi=0;
$bm_id=0;
if($bmid=='')
{
$sql="select max(bill_master_id) from bill_master";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

 $bmi=$row[0];
$bmi=$bmi+1;
}
else
{
 //bm_id=Integer.parseInt(bmid);

  $bmi=$bmid+0;
}

$dat=date('Y-m-d');
?>

<form name="formID" ID="formID" method="post" action="bill_master_insert.php">
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmi; ?>" size="5" readonly=""></th>
      <th width="53%" colspan="4"><div align="right">Date 
            <input name="date" type="text" value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td colspan="2">Select Customer
        <select name="c_id" id="c_id" class="validate[required] form-control" >
          <option value="">Select Customer</option>
		  <?php
		  $sql1="select * from customer_details";
		 $res1=mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_array($res1))
		
		{
		$cid=$row1["customer_id"];
		?>
		<option value="<?php echo $cid; ?>" <?php if($cid==$c_id) { ?> selected <?php } ?>><?php echo $row1["customer_name"]; ?></option>
		<?php
		}
		  ?>
        </select> </td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <th>Select Product </th>
      <th>Rate</th>
      <th>Quantity</th>
      <th>Discount</th>
      <th>Total</th>
      <th>&nbsp;</th>
    </tr>
    <tr>
      <td><select name="prodcut_id" id="product_id"  class="validate[required]">
        <option value="">Select Procuct</option>
		<?php
		  $sql2="select * from  product_details";
		$res2=mysqli_query($conn,$sql2);
			while($row2=mysqli_fetch_array($res2))
		{
		?>
		<option value="<?php echo $row2["product_id"]; ?>"><?php echo $row2["product_name"]; ?></option>
		<?php
		}
		  ?>
      </select></td>
      <td><input name="rate" type="text" id="rate"  class="validate[required,custom[onlyNumber]] " size="15" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="qnt" type="text" id="qnt"  class="validate[required,custom[onlyNumber]]" size="10" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="dic" type="text" id="dic"  class="validate[required,custom[onlyNumber]]"  onFocus="startCalc();" onBlur="stopCalc();" value="0" size="10"></td>
      <td><input name="total" type="text" id="total" size="15" readonly="">
        <input type="submit" name="Submit" value=" Add Product "></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <table class="table table-striped">
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
      <th>Qnt</th>
      <th>Total</th>
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		$sql3="select * from  bill_details bd, product_details p where bd.product_id=p.product_id and bd.bill_master_id='$bmid' ";
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