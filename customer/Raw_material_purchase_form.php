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
          <h1><i class="fa fa-edit"></i> Row Material Purchase Details</h1>
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
$sup_id=$_REQUEST["s_id"];
$su_id=0;
//if(sup_id!=null)
//{
 //su_id=Integer.parseInt(sup_id);
//}
$pmi=0;
$pm_id=0;
if($pmid=='')
{
$sql="select max(raw_material_purchase_id) from   raw_material_purchase";
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

<form name="formID" ID="formID" method="post" action="raw_material_purchase_detail_insert.php">
 <table class="table table-striped table-bordered table-hover"    >
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="pmid" type="text" id="pmid" value="<?php echo $pmi; ?>" size="5" readonly=""></th>
      <th width="53%" colspan="3"><div align="right">Date 
            <input name="date" type="text" value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td colspan="2">Select Vendor
        <select name="sup_id" id="sup_id"  class="validate[required]" >
          <option value="">Select Vendor</option>
		  <?php
		  $sql1="select * from vendor_details";
		  $res1=mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_array($res1))
		
		{
		$sid=$row1["vendor_id"];
		?>
		<option value="<?php echo $sid; ?>" <?php if($sid==$sup_id) {?> selected <?php }?>><?php echo $row1["vendor_name"]; ?></option>
		<?php
		}?>
        </select> </td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th>Select Raw Material </th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Discount</th>
      <th>Total</th>
    </tr>
    <tr>
      <td><select name="prodcut_id" id="product_id" class="validate[required]">
        <option value="">Select Procuct</option>
		<?php
		 $sql2="select * from raw_material_details";
		 $res2=mysqli_query($conn,$sql2);
			while($row2=mysqli_fetch_array($res2))
		{?>
		<option value="<?php echo $row2["raw_material_id"]; ?>"><?php echo $row2["raw_material_name"]; ?></option>
		<?php
		}?>
      </select></td>
      <td><input name="rate" type="text" id="rate" size="15" class="validate[required,custom[onlyNumber]]" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="qnt" type="text" id="qnt" size="10" onFocus="startCalc();" onBlur="stopCalc();" class="validate[required,custom[onlyNumber]]"></td>
      <td><input name="dic" type="text" id="dic" value="0" size="10" class="validate[custom[onlyNumber]]" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="total" type="text" id="total" size="15" readonly="">
        <input type="submit" name="Submit" value=" Add Product "></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
 <table class="table table-bordered table-hover tablesorter"  id="demo-dtable-01"  >
    <tr>
      <th>Sl NO</th>
      <th>Raw Material Name </th>
      <th>Price</th>
      <th>Qnt</th>
      <th>Total</th>
      <th>Cancel</th>
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		 $sql3="select * from  raw_material_purchase_details pd,raw_material_details p where pd.raw_material_id=p.raw_material_id and pd.raw_material_purchase_id='$pmid' ";
		 $res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
		{
		$slno=$slno+1;
		$pur_id=$row3["raw_material_id"];
		$pid=$row3["raw_material_id"];
		
		 $qnt=$row3["quantity"];
		 $rate=$row3["rate"];
		 $dic=$row3["discount"];
		 $pname=$row3["raw_material_name"];
		 
		 $tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 $total=$total+$tot;
		 $vat=($total*18)/118;
		 $gtotal=($total+$vat)-$discount;?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<?php echo $tot; ?></td>
      <td>&nbsp;<a href="pur details_delete.php?pur_id=<?php echo $pur_id; ?>&pmid=<?php echo $pmid; ?>&sup_id=<?php echo $sup_id; ?>&p_id=<?php echo $pid; ?>&qnt=<?php echo $qnt; ?>" title=" <?php echo $slno; ?>" >Delete</a></td>
    </tr>
    
	<?php
	}?>
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
      <td>&nbsp;<b><?php echo $vat; ?></b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="4"><div align="right"><b>Total Purchase Amount </b></div></th>
      <th>&nbsp;<b><?php echo $gtotal ?><b></th>
      <td>&nbsp;</td>
    </tr>
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

