<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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
		<div class="login-box " >
			
			<form >
				<div class="form-group">
					<label for="username">Username:</label>
					<input placeholder="username or email " type="text" class="form-control " id="username">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
		</div>
		
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
