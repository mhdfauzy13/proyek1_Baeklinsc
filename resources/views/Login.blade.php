<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body{
			background-color: #bfc4d0
		}
		.login-box {
			margin-top: 20px;
			width: 100%;
			max-width: 500px;
			margin-left: auto;
			margin-right: auto;
			background-color: #fff;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
		}

		.login-box .logo {
			margin-bottom: 30px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container ">
		<div class=" d-flex flex-column align-items-center">
			<img src="/assets/image/logoBaeklin.png" class="pt-4" width="200px"/>
		<div style="max-width: 500px;border-radius: 25px;" class="bg-dark mb-4 w-100" >
			<div class="login-box  border-top-5 border-danger" >
				<div class="border-bottom border-dark mb-4">
					<p style="font-size: 20px; font-weight:bold">Login</p>
				</div>
				<form >
					<div class="form-group">
						<label for="username">
							<img src="assets/icon/userLogo.png" alt="userlogo" width="20px" />
							Username:
						</label>
						<input placeholder="username or email " type="text" class="form-control " id="username">
					</div>
					
					<div class="form-group">
						<label for="password">
							<img src="assets/icon/passwordLogo.png" alt="passwordlogo" width="16px" />
							Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					<div class="pb-4">
						<a href="#" >Lupa password? </a>
					</div>
					<div class="pb-4">
						<p>Udah punya akun belum? <a href="register" class="text-primary">Daftar</a> </p>
					</div>
					
					<button style="font-weight:bold" type="submit" class="btn btn-dark w-100 ">Login</button>
				</form>
			</div>
		</div>
	</div>
		</div>
		
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
