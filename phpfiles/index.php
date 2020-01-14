<?php
  include_once("connection.php");
  $chart = mysqli_query($conn, "SELECT SPORT_NAME,COUNT(M_ID) FROM COURT_ENTRY GROUP BY SPORT_NAME");
  $membercount = mysqli_query($conn, "SELECT COUNT(M_ID) FROM member");
  $trainers = mysqli_query($conn, "SELECT COUNT(T_ID) FROM trainer");
  $coaches = mysqli_query($conn, "SELECT COUNT(C_ID) FROM coach");
  $malemembers = mysqli_query($conn, "SELECT COUNT(M_ID) FROM member where gender='M'");
  $femalemembers = mysqli_query($conn, "SELECT COUNT(M_ID) FROM member where gender='F'");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	   google.charts.load('current', {'packages':['corechart']});
	   google.charts.setOnLoadCallback(drawChart);

	   function drawChart() {

       var data = google.visualization.arrayToDataTable([
      	['Sport Name', 'Popularity'],
          <?php 
            while($row = mysqli_fetch_array($chart)){
              echo "['".$row[0]."', ".$row[1]."],";
            }
          ?>
        ]);
    
    var options = {
        width: 900,
        height: 500,
        is3D: true,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    	chart.draw(data, options);
	   }
	</script>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Fitness360 |</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Fitness360</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>WELCOME</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>

                  <li><a><i class="fa fa-user"></i> Members <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="member_registration_form.php">Member Registration Form</a></li>
                      <li><a href="Member_List.php">Member List</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i> Trainers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="trainer_form.php">Trainer Registration Form</a></li>
                      <li><a href="trainer_list.php"> Trainer List</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i> Coaches <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="coach_form.php">Coach Registration Form</a></li>
                      <li><a href="Coach_List.php">Coach List</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-edit"></i> Invoice <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="invoice.php">Statistics</a></li>
                      <li><a href="invoice2.php">Sport Played Most</a></li>
                    </ul>
                  </li> 

                  <li><a href="SPORTS_ENTRY.php"><i class="fa fa-support"></i> Sports</a></li>

                  <li><a href="LOCKER.php"><i class="fa fa-key"></i> Locker</a></li>

                  <li><a href="gym_entry.php"><i class="fa fa-table"></i> Gym Entry</a></li>

                  <li><a href="courtentry.php"><i class="fa fa-table"></i> Court Entry</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a class="user-profile dropdown-toggle"  aria-expanded="false">
                    <img src="images/img.jpg" alt=""></a>
				</li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-sm-4 col-xs-6 tile_stats_count col-md-offset-1 col-md-2"><span class="count_top"><em class="fa fa-user"></em> Members</span>
              <div class="count">
        			  <?php 
        				  $row = mysqli_fetch_array($membercount);
        				  echo $row[0];
        				?>
			         </div>
            </div>
            <div class="col-sm-4 col-xs-6 tile_stats_count col-md-2">
              <span class="count_top"><i class="fa fa-user"></i> Trainers</span>
              <div class="count">
                <?php
                  $row = mysqli_fetch_array($trainers);
    				      echo $row[0];
  				      ?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Coaches</span>
              <div class="count">
                <?php
        				  $row = mysqli_fetch_array($coaches);
        				  echo $row[0];
				        ?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Male Members</span>
              <div class="count">
                <?php
        				  $row = mysqli_fetch_array($malemembers);
        				  echo $row[0];
        				?>
              </div>
            </div>
            <div class="col-sm-4 col-xs-6 tile_stats_count col-md-2"><span class="count_top"><em class="fa fa-user"></em> Female Members</span>
              <div class="count">
        			  <?php  
        				  $row = mysqli_fetch_array($femalemembers);
        				  echo $row[0];
        				?>    
              </div>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Sports Played</h3>
                  </div>
				        </div>
                <div class="col-sm-9 col-xs-12 col-md-12">
                  <div id="piechart"></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />
        </div>
        <!-- /page content -->
      </div>
    </div>
    <?php $conn->close(); ?>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
