@extends('dashboard.Auth.master')
@section('pagetitle','locked')
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<div class="login100-form-logo">
						<div class="image">
							<img src="/dashboard/images/usrbig.jpg" alt="User">
						</div>
					</div>
					<span class="login100-form-title p-b-34 p-t-27">
						آرش خادملو
					</span>
					<div class="text-center">
						<p class="txt1 p-b-20">
							قفل شده
						</p>
					</div>


					<div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">رمزعبور</span>
					</div>


					<div class="container-login100-form-btn p-t-30">
						<button class="login100-form-btn">
							ورود
						</button>
					</div>

					<div class="w-full p-t-15 p-b-15 text-center">

						<div>
							<a href="#" class="txt1">
								آیا نیازمند کمک هستید؟
							</a>
						</div>
					</div>

				</form>

				<div class="login100-more" style="background-image: url(&#x27;images/bg-01.png&#x27;);">
				</div>
			</div>
		</div>
	</div>


@endsection
