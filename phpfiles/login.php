<!DOCTYPE html>
<script>
	function validateForm() {
    var x = document.forms["myForm"]["username"].value;
	var y = document.forms["myForm"]["password"].value;
	var name = document.getElementById("username");
	var password = document.getElementById("password");
    if (x != "admin" || y != "admin" ) {
        name.style.borderColor = "#FF0000";
		password.style.borderColor = "#FF0000";
        return false;
    }
}
</script>
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
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
	
	  <div>
	    <h1 class="text-center"><em class="fa fa-paw"></em> Fitness360</h1>
	  </div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="myForm" action="index.php" method="post" onsubmit="return validateForm()" >
              <h1>Login Form</h1>
              <div>
                <input id="username" name="username" type="text" class="form-control" placeholder="Username" required="required" />
              </div>
              <div>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="required" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value ="LOG IN"/>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Fitness360</h1>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
