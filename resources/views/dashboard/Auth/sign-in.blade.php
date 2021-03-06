@extends('dashboard.Auth.master')
@section('pagetitle','sign-in')
@section('content')


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-45">
						ورود
					</span>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">ایمیل</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">رمزعبور</span>
					</div>

					<div class="flex-sb-m w-full p-t-15 p-b-20">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value> مرا به خاطر بسپار
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								رمز عبور را فراموش کردید؟
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							ورود
						</button>
					</div>

					<div class="text-center p-t-45 p-b-20">
						<span class="txt2">
							یا با استفاده از ثبت نام
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fab fa-facebook-f"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" ">
				</div>
			</div>
		</div>
	</div>


@endsection
