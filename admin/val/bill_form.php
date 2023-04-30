<!DOCTYPE html>
<?php include('metatag.php');?>
<?php include('header.php');?>
              <?php include('sidebar.php');?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Form Examples</h3>

<form name="form1" id="formID"method="post" action="bill_insert.php">
 <div class="form-group has-success">
  <table width="634" border="0">
    <tr>
      <td height="40" colspan="2"><div align="center">Bill</div></td>
    </tr>
    <tr>
      <td width="197">Order ID </td>
      <td width="279">
	  <div class="form-group">
        <p>
          <select name="order_id" id="order_id" class="form-control">
	      <option>select order_date</option>
	      <?php
 
  include("db_connection.php");
  $sql="select *from orderdetails";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
 
    ?>
		      <option value="<?php echo $row['order_id']; ?>"><?php echo $row['order_date']; ?></option>
              <?php
}
?>
          </select>
        </p>
        </div></td>
    </tr>
    <tr>
      <td>total_amount</td>
      <td><input type="text" id="total_amount" class="form-control validate[required,custom[onlyNumber]]"name="total_amount"></td>
    </tr>
    <tr>
      <td height="71">discount</td>
      <td><input type="text" id="discount" class="form-control validate[required,custom[onlyNumber]]" name="discount"></td>
    </tr>
    <tr>
      <td height="54">bill_date</td>
      <td><input type="text" id="bill_date" class="form-control validate[required,custom[date]]" name="bill_date"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
     
<input type="submit" name="Submit" value="Submit">
        <input type="submit" name="Submit" value="Reset">      
      </div></td>
    </tr>
  </table>
  
</form>
   </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <?php include('val.php'); ?>

   
</body>
</html>