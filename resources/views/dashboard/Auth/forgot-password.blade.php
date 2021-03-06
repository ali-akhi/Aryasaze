@extends('dashboard.Auth.master')
@section('pagetitle','forgotpaassword')
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-45">
						بازیابی رمز عبور
					</span>

					<span class="error-subheader2 p-t-20 p-b-15">
						آدرس ایمیل ثبت شده خود را وارد کنید.
					</span>
					<div class="wrap-input100 validate-input" data-validate="ایمیل معتبر مورد نیاز است: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">ایمیل</span>
					</div>

					<div class="container-login100-form-btn p-t-30">
						<button class="login100-form-btn">
							تنظیم مجدد رمز عبور من
						</button>
					</div>

					<div class="w-full p-t-25 text-center">

						<div>
							<a href="sign-in.html" class="txt1">
								ورود?
							</a>
						</div>
					</div>

				</form>

				<div class="login100-more" style="background-image: url(&#x27;images/bg-02.png&#x27;);">
				</div>
			</div>
		</div>
	</div>


@endsection
