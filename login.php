<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'DBConnect.php';
	$username = $_POST["username"];
    $password = $_POST["password"];

	$sql = "SELECT * FROM `login` WHERE username = '$username' ";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password']) && $row['role'] == '1'){//verify your hash string
                $_SESSION['status'] = "Login was Successfuly.";
				$_SESSION['status_code'] = "success";           
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
				
				header("Location:home_admin.php");
                //redirect the page	
            }
			else if(password_verify($password, $row['password']) && $row['role'] == '0'){//user login
                $_SESSION['status'] = "Login was Successfuly.";
				$_SESSION['status_code'] = "success";           
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
				
				header("Location:home.php");
                //redirect the page	
            }
            else{
				$_SESSION['status'] = "Invalid Password!!";
				$_SESSION['status_code'] = "error";
            }
        }
    }
    else{
		$_SESSION['status'] = "Invalid username and passwords!!";
		$_SESSION['status_code'] = "error";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>THE Knot.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->

	<link rel="stylesheet" type="text/css" href="asset3/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="asset3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="asset3/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="asset3/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="asset3/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="asset3/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="asset3/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="asset3/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset3/css/main.css">
	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="/THE_Knot/login.php">

					<span class="login100-form-title">
						<div class="">
							<strong>Sign In</strong>
						</div>
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>
						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>
					<div class="container-login100-form-btn">
						<button name="Login" class="login100-form-btn">
							<strong>Login Now</strong>
						</button>
					</div>

					<div class="flex-col-c p-t-20 p-b-30">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="Register.php" class="txt3">
							Sign Up!!
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



	<script src="asset3vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="asset3vendor/animsition/js/animsition.min.js"></script>

	<script src="asset3vendor/bootstrap/js/popper.js"></script>
	<script src="asset3vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="asset3vendor/select2/select2.min.js"></script>

	<script src="asset3vendor/daterangepicker/moment.min.js"></script>
	<script src="asset3vendor/daterangepicker/daterangepicker.js"></script>

	<script src="asset3vendor/countdowntime/countdowntime.js"></script>

	<script src="asset3js/main.js"></script>
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