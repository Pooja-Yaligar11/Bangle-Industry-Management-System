<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php'); ?>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php'); ?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Chart</h1>
          <p>sales and production chart</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Chart</a></li>
        </ul>
      </div>
      <div class="row">
        <!-- <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div> -->
      </div>
	  <?php
	  include('dbconnect.php');
	  $y=date('Y');
	
	  $jan=$y."-01-%";
	  $feb=$y."-02-%";
	  $mar=$y."-03-%";
	  $apr=$y."-04-%";
	  $may=$y."-05-%";
	  $jun=$y."-06-%";
	  $jly=$y."-07-%";
	  $aug=$y."-08-%";
	  $sep=$y."-09-%";
	  $oct=$y."-10-%";
	  $nov=$y."-11-%";
	  $dec=$y."-12-%";
	   
	   $jan_p=0;
	   $feb_p=0;
	   $mar_p=0;
	   $apr_p=0;
	   $may_p=0;
	   $jun_p=0;
	   $jly_p=0;
	   $aug_p=0;
	   $sep_p=0;
	   $oct_p=0;
	    $nov_p=0;
		 $dec_p=0;
	   
	   $sql=" select sum(total_production) as tp from production  where production_date LIKE '$jan'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $jan_p=$row['tp'];
  }
  
   $sql=" select sum(total_production) as tp from production  where production_date LIKE '$feb'";
  $res=mysqli_query($conn,$sql);
  while($row2=mysqli_fetch_array($res))
  {
  $feb_p=$row2['tp']+0;
  }
  
  $sql=" select sum(total_production) as tp from production  where production_date LIKE '$mar'";
  $res=mysqli_query($conn,$sql);
  while($row3=mysqli_fetch_array($res))
  {
  $mar_p=$row3['tp']+0;
  }
  
  $sql=" select sum(total_production) as tp from production  where production_date LIKE '$apr'";
  $res=mysqli_query($conn,$sql);
  while($row4=mysqli_fetch_array($res))
  {
  $apr_p=$row4['tp']+0;
  }
  
   $sql=" select sum(total_production) as tp from production  where production_date LIKE '$apr'";
  $res=mysqli_query($conn,$sql);
  while($row4=mysqli_fetch_array($res))
  {
  $apr_p=$row4['tp']+0;
  }
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$may'";
  $res=mysqli_query($conn,$sql);
  while($row5=mysqli_fetch_array($res))
  {
  $may_p=$row5['tp']+0;
  }
  
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$jun'";
  $res=mysqli_query($conn,$sql);
  while($row6=mysqli_fetch_array($res))
  {
  $jun_p=$row6['tp']+0;
  }
  
     $sql=" select sum(total_production) as tp from production  where production_date LIKE '$jly'";
  $res=mysqli_query($conn,$sql);
  while($row7=mysqli_fetch_array($res))
  {
  $jly_p=$row7['tp']+0;
  }
  
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$aug'";
  $res=mysqli_query($conn,$sql);
  while($row8=mysqli_fetch_array($res))
  {
  $aug_p=$row8['tp']+0;
  }
  
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$sep'";
  $res=mysqli_query($conn,$sql);
  while($row9=mysqli_fetch_array($res))
  {
  $sep_p=$row9['tp']+0;
  }
  
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$oct'";
  $res=mysqli_query($conn,$sql);
  while($row10=mysqli_fetch_array($res))
  {
  $oct_p=$row10['tp']+0;
  }
  
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$nov'";
  $res=mysqli_query($conn,$sql);
  while($row11=mysqli_fetch_array($res))
  {
  $nov_p=$row11['tp']+0;
  }
  
    $sql=" select sum(total_production) as tp from production  where production_date LIKE '$dec'";
  $res=mysqli_query($conn,$sql);
  while($row12=mysqli_fetch_array($res))
  {
  $dec_p=$row12['tp']+0;
  }
  
  $tot_p=0;
    $sql=" select sum(total_production) as tp from production  ";
  $res=mysqli_query($conn,$sql);
  while($row_p=mysqli_fetch_array($res))
  {
  $tot_p=$row_p['tp']+0;
  }
  
    $tot_s=0;
    $sql=" select * from bill_details  ";
  $res=mysqli_query($conn,$sql);
  while($row_s=mysqli_fetch_array($res))
  {
  $tot_sa=($row_s['quantity']*$row_s['rate'])-$row_s['discount'];
  $tot_s=$tot_s+$tot_sa;
  }
	  ?>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Reports</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Total Sales and Production</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May", "June", "July", "Augst", "Septeber", "October", "November", "December"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			//data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [<?php echo $jan_p; ?>, <?php echo $feb_p; ?>, <?php echo $mar_p; ?>,  <?php echo $apr_p; ?>,  <?php echo $may_p; ?>,  <?php echo $jun_p; ?>,  <?php echo $jly_p; ?>,  <?php echo $aug_p; ?>,  <?php echo $sep_p; ?>,  <?php echo $oct_p; ?>,  <?php echo $nov_p; ?>,  <?php echo $dec_p; ?>]
      		}
      	]
      };
      var pdata = [
      	{
      		value:<?php echo $tot_p; ?>,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Total Prodction"
      	},
      	{
      		value: <?php echo $tot_s; ?>,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Total Sales"
      	}
		
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>