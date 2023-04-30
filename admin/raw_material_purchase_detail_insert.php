 <?php
	 include('dbconnect.php');
	 
$pmid=$_REQUEST["pmid"];
$dat=$_REQUEST["date"];
$s_id=$_REQUEST["sup_id"];
$p_id=$_REQUEST["prodcut_id"];
$qnt=$_REQUEST["qnt"];
$rate=$_REQUEST["rate"];
$dic=$_REQUEST["dic"];

$quant=$qnt;


//$sql="select * from  raw_material_details where raw_material_id='$p_id'";
///$res=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($res);

//$c_stock=$row["current_stock"];

//$cs_id=($c_stock+$quant);
  
  $sql2="select * from  raw_material_purchase where raw_material_purchase_id='$pmid'" ;
		$res2=mysqli_query($conn,$sql2);
		if($row2=mysqli_fetch_array($res2))
		{
		$sql3="insert into  raw_material_purchase_details values(null,'$pmid','$p_id','$qnt','$rate','$dic')";
		mysqli_query($conn,$sql3);
		
		//$sql4="update products set current_stock='$cs_id' where pro_id='$p_id' ";
		//mysqli_query($conn,$sql4);
		}
		else
		{
		
		$sql5="insert into raw_material_purchase_details values(null,'$pmid','$p_id','$qnt','$rate','$dic')";
		mysqli_query($conn,$sql5);
		$sql6="insert into raw_material_purchase values('$pmid','$s_id','$dat')";
		mysqli_query($conn,$sql6);
		//$sql7="update products set current_stock='$cs_id' where pro_id='$p_id' ";
		//mysqli_query($conn,$sql7);
		}
?>

<script>
alert('Purchase Details Added....');
//document.location="Raw_material_purchase_form.php?pmid="+<?php echo $pmid; ?>+"&s_id="+<?php echo $s_id; ?>";
document.location="Raw_material_purchase_form.php?pmid=<?php echo $pmid; ?>&s_id=<?php echo $s_id; ?>";
</script>