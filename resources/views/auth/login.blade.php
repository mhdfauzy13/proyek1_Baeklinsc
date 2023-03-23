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
    <x-auth-session-status class="mb-4" :status="session('status')" />
	<div class="container ">
		<div class=" d-flex flex-column align-items-center">
			<img src="/assets/image/logoBaeklin.png" class="pt-4" width="200px"/>
		<div style="max-width: 500px;border-radius: 25px;" class="bg-dark mb-4 w-100" >
			<div class="login-box  border-top-5 border-danger" >
				<div class="border-bottom border-dark mb-4">
					<p style="font-size: 20px; font-weight:bold">Login</p>
				</div>
				<form method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="form-group">
						<label for="username">
							<img src="assets/icon/userLogo.png" alt="userlogo" width="20px" />
							Username:
						</label>
						<input id="email" name="email" placeholder="username or email " type="text" class="form-control " id="username">
					</div>
					
					<div class="form-group">
						<label for="password">
							<img src="assets/icon/passwordLogo.png" alt="passwordlogo" width="16px" />
							Password:</label>
						<input id="password" name="password" type="password" class="form-control" id="password">
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



{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
