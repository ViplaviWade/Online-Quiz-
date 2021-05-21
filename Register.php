<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form method="post" id="examineeRegisterFrm" class="login100-form validate-form">


					<div class="wrap-input100 validate-input m-b-26" data-validate="Full Name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="fullname" placeholder="Enter full name">
						<span class="focus-input100"></span>
					</div>
						


						<div class="wrap-input100 validate-input m-b-26" data-validate="Birth-Date">
						<div class="form-group">
          					  <span class="label-input100">Birth-Date</span>
           					 <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" >
         					 </div>
						</div>







						<div class="wrap-input100 validate-input m-b-26" data-validate="Gender is required">
						<div class="form-group">
           <span class="label-input100">Gender</span>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Select gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
</div>




							
							<div class="wrap-input100 validate-input m-b-26" data-validate="Course is required">
						<div class="form-group">
           					 <span class="label-input100">Course</span>
				            <select class="form-control" name="course" id="course">
				              <option value="0">Select course</option>
				              <?php 	
						include("conn.php");
				                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
				                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
				                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
				                <?php }
				               ?>
				            </select>
					          </div>
							</div>



					<div class="wrap-input100 validate-input m-b-26" data-validate="Invalid Email">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>
					













					
	
					

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn" align="right">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
						
								
				</form>
			</div>
		</div>
	</div>
	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>


	
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>

	

</body>
</html>