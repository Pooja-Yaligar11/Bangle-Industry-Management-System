	<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
	<style>
	<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
	</style>
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Samples</h1>
          <p>Sample forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Our Products</h3>
            <div class="tile-body">
			<h1>Our Products</h1>
  <div class="row">
  
  <br>
  <?php include('dbconnect.php'); ?>
  <?php
  
  $sql="select * from product_details"; 
  $res=mysqli_query($conn,$sql); 
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <div class="column">
    <img src="../upload/<?php echo $row['product_image']; ?>" alt="Snow" style="width:100%; height:50%">
  </div>
  <?php }
  ?>
  
</div>
            </div>
           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
   
  </body>
</html>