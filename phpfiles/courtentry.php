<!DOCTYPE html>
<?php
include_once("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  function clean($conn,$str)
{
    $cleaned = mysqli_real_escape_string($conn,strip_tags($str));
    return $cleaned;
}

$_m_id = clean($conn,$_POST['m_id']);
$_sname = clean($conn,$_POST['sname']);
$_tin = clean($conn,$_POST['tin']);
$_tout = clean($conn,$_POST['tout']);

$query1 = "INSERT into court_entry(M_ID,SPORT_NAME,TIME_IN,TIME_OUT) VALUES ('$_m_id','$_sname','$_tin','$_tout')";

  mysqli_query($conn, $query1);
}

?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Fitness360 | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Fitness360</span></a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Court Entry</h3>
              </div>

              <div class="title_right"> </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                  <!--<div class="x_title">
                    <h2>Enter Court Entry</h2>
                    <div class="clearfix"></div>
              </div>-->
				<form class="form-horizontal form-label-left" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<span class="section">Enter Court Entry</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="locker_id">Member ID <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input id="m_id" class="form-control col-md-7 col-xs-12"  name="m_id"  required="required" type="number">
                        </div>
                  </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name6">Sport <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="sname" class="form-control col-md-7 col-xs-12" data-validate-length-range="50" data-validate-words="2" name="sname" placeholder="Badminton" required="required" type="text">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name6">Time In <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tin" class="form-control col-md-7 col-xs-12" data-validate-length-range="50" data-validate-words="2" name="tin" placeholder="YYYY-MM-DD HH:MM:SS" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name6">Time Out <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tout" class="form-control col-md-7 col-xs-12" data-validate-length-range="50" data-validate-words="2" name="tout" placeholder="YYYY-MM-DD HH:MM:SS" required="required" type="text">
                        </div>
                      </div>
                  <div class="item form-group">
                        <div class="col-md-2 col-md-offset-6">
                          <button id="send" type="submit" class="btn btn-success">Save</button>
                      </div>
                      </div>
		      </form>
              <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
						              <th>Sr. No.</th>
                          <th>Member ID</th>
                          <th>Sport</th>
                          <th>Time In</th>
                          <th>Time Out</th>
                        </tr>
                      </thead>
						          <tbody>
                        <?php 
                        $query = "SELECT * FROM court_entry";
                        $result= mysqli_query($conn,$query);
                        while( $row = mysqli_fetch_array($result)){
						              echo "<tr> <td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td> </tr>";
                        }
				                ?>
                      </tbody>
                    </table>
                  <div class="form-group"></div>
              </div>
            </div>
          </div>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>