<?php
include 'DBConnect.php';
include 'functions.php';

if($_SERVER["REQUEST_METHOD"]=='POST'){

	$name = $_POST["name"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$contact = $_POST["contact"];

	$existSql = "SELECT * FROM `login` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $exists = true;        
		$_SESSION['status'] = "Username already exists.";
		$_SESSION['status_code'] = "error";
    } 
    else{
        $exists = false;
		$hash = password_hash($password, PASSWORD_DEFAULT);//generate secure
		$user_id = random_num(5);
		$sql = "INSERT INTO `login` (`user_id`, `name`, `username`, `password`, `contact`, `DT`) VALUES ('$user_id','$name', '$username', '$hash', '$contact', current_timestamp())";
		$result = mysqli_query($conn , $sql);
		if($result){
			$_SESSION['status'] = "Account has been created.";
			$_SESSION['status_code'] = "success";			
			header("location:login.php");			
		}  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>THE Knot.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->

	<link rel="stylesheet" type="text/css" href="asset3/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="asset3/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="asset3/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="asset3/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="asset3/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="asset3/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="asset3/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset3/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="/THE_Knot/Register.php">				
					<span class="login100-form-title">												
						<strong> Sign Up </strong>												
					</span>
					
					<div class="wrap-input100 validate-input m-b-16 m-t-10" data-validate="Please enter name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" minlength="8" maxlength="15" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter contact">
						<input class="input100" type="contact	" minlength="10" maxlength="10" name="contact" placeholder="contact">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<strong>Sign Up</strong>		
						</button>
					</div>
					<div class="flex-col-c p-t-20 p-b-30">
						<span class="txt1 p-b-9">
							Already You have an account?
						</span>

						<a href="login.php" class="txt3">
							Login Now
						</a>
					</div>
					<div class="header d-flex align-items-center">
						<div class="container-fluid container-xl d-flex align-items-center justify-content-center p-b-20">
							<a href="home.php" class="logo d-flex align-items-center ">								
								<h1>Knot<span>.</span></h1>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="asset3/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="asset3/vendor/animsition/js/animsition.min.js"></script>
	<script src="asset3/vendor/bootstrap/js/popper.js"></script>
	<script src="asset3/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="asset3/vendor/select2/select2.min.js"></script>
	<script src="asset3/vendor/daterangepicker/moment.min.js"></script>
	<script src="asset3/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="asset3/vendor/countdowntime/countdowntime.js"></script>
	<script src="asset3/js/main.js"></script>
<!-- SWEET ALERT -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	if(isset($_SESSION['status']) && $_SESSION['status'] != '')
	{
		?>
		<script>
			swal({
				title: "<?php  echo $_SESSION['status'];?>",
				//text: "You clicked the button!",
				icon: "<?php  echo $_SESSION['status_code']; ?>",
				button: "Done!",
				});
		</script>
		<?php
		unset($_SESSION['status']);
	}
?>

</body>
</html>