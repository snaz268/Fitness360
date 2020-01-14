<!DOCTYPE html>
<?php
include_once("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
function clean($conn,$str)
{
    $cleaned = mysqli_real_escape_string($conn,strip_tags($str));
    return $cleaned;
}

$_fname = clean($conn,$_POST['fname']);
$_lname = clean($conn,$_POST['lname']);
$_dob = clean($conn,$_POST['dob']);
$_gender = clean($conn,$_POST['gender']);
$_email = clean($conn,$_POST['email']);
$_cnic = clean($conn,$_POST['cnic']);
$_address = clean($conn,$_POST['address']);
$_phonenumber = clean($conn,$_POST['phonenumber']);

$query = "INSERT into member(FNAME,LNAME,PHONE_NO,EMAIL,DOB,GENDER,SSN,ADDRESS) VALUES ('$_fname','$_lname','$_phonenumber','$_email','$_dob','$_gender','$_cnic','$_address')";

$result = mysqli_query($conn, $query);
if(!$result){
  die("Failed to store");
}

mysqli_close($conn);
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
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;"><a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Fitness360</span></a></div>

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
                <h3>Member Registration Form</h3>
              </div>

              <div class="title_right"> </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Member</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<span class="section">Member Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name3">First Name <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fname" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" name="fname" placeholder="John" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name4">Last Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lname" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" name="lname" placeholder="Doe" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phonenumber" name="phonenumber" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">CNIC <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="cnic" name="cnic" data-validate-length-range="10,20" class="optional form-control col-md-7 col-xs-12" required="required" placeholder="00000-0000000-0">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gender" type="text" name="gender" class="form-control col-md-7 col-xs-12" required="required" placeholder="M or F">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password3" class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dob" type="date" name="dob"  class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
<div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
						   <button id="send" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>