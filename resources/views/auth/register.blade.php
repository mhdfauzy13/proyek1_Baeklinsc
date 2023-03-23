<!DOCTYPE html>
<html>
<head>
	<title>register Form</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body{
			background-color: #bfc4d0
		}
		.register-box {
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

		.register-box .logo {
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
			<div class="register-box  border-top-5 border-danger" >
				<div class="border-bottom border-dark mb-4">
					<p style="font-size: 20px; font-weight:bold">register</p>
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
						<label for="username">
							<img src="assets/icon/userLogo.png" alt="userlogo" width="20px" />
							email:
						</label>
						<input placeholder="username or email " type="text" class="form-control " id="username">
					</div>
					<div class="form-group">
						<label for="username">
							<img src="assets/icon/userLogo.png" alt="userlogo" width="20px" />
							No Telephon:
						</label>
						<input placeholder="username or email " type="text" class="form-control " id="username">
					</div>
					<div class="form-group">
						<label for="username">
							<img src="assets/icon/userLogo.png" alt="userlogo" width="20px" />
							Alamat:
						</label>
						<input placeholder="username or email " type="text" class="form-control " id="username">
					</div>
					<div class="form-group">
						<label for="password">
							<img src="assets/icon/passwordLogo.png" alt="passwordlogo" width="16px" />
							Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					<div class="form-group">
						<label for="password">
							<img src="assets/icon/passwordLogo.png" alt="passwordlogo" width="16px" />
							Ulangi Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					<div class="pb-4">
						<a href="/login" >udah punya akun? </a>
					</div>
					
					<button style="font-weight:bold" type="submit" class="btn btn-dark w-100 ">register</button>
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
