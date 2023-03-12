<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			background-color: #8B4513;
		}

		.login-box {
			margin-top: 100px;
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

		.login-box .logo img {
			max-width: 150px;
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class="logo">
				<img src="logo.png" alt="Logo">
			</div>
			<form>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
