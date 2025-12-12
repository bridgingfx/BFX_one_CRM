@extends('layouts.auth')
@section('content')


	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="images/logo-white.png" alt="">
				</div>
				<h3 class="mb-2 text-white">Welcome back Admin!</h3>
				<p class="mb-4">User Experience & Interface Design <br>Strategy SaaS Solutions</p>
			</div>
			 <div class="aside-image position-relative" style="background-image:url({{ URL::asset('assets/images/background/pic-2.png') }});">
				{{-- <img class="img1 move-1" src="{{ URL::asset('assets/images/background/pic3.png') }}" alt="">
				<img class="img2 move-2" src="{{ URL::asset('assets/images/background/pic4.png') }}" alt="">
				<img class="img3 move-3" src="{{ URL::asset('assets/images/background/pic5.png') }}" alt=""> --}}
				
			</div> 
		</div>
		
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
								
								<form method="POST" action="{{ route('pilot.login.submit') }}">
								 @csrf
									<div class="text-center mb-4">
										<h3 class="text-center mb-2 text-dark">Sign In</h3>
									
									</div>
									
									@if ($errors->any())
									<div class="alert alert-danger" id="errorMessage">
										<ul class="mb-0">
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label required">UserID / Email</label>
										<input id="email" class="form-control" type="email" name="email" value="" required autofocus />
									</div>
									<div class="mb-3 position-relative">
										<label class="form-label required">Password</label>
										<input type="password" id="dlab-password" class="form-control" value="" name="password" />
										<span class="show-pass eye">
											<i class="fa fa-eye-slash"></i>
											<i class="fa fa-eye"></i>
										
										</span>
									</div>
									<div class="form-row d-flex justify-content-between mt-4 mb-2">
										<div class="mb-3">
											<div class="form-check custom-checkbox mb-0">
												<input type="checkbox" class="form-check-input" id="customCheckBox1" name="remember" required="">
												<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
											</div>
										</div>
										@if (Route::has('password.request'))
										<div class="mb-4">
											<a href="#" class="btn-link text-primary">Forgot Password?</a>
										</div>
										@endif
									</div>
									<button class="btn btn-block btn-primary">{{ __('Log in') }}</button>
									
								</form>
								{{-- <div class="new-account mt-3 text-center">
									<p class="font-w500">Already have an account? <a class="text-primary" href="{{ route('register') }}" data-toggle="tab">Sign in</a></p>
								</div> --}}
							</div>
							{{-- <div class="d-flex align-items-center justify-content-center">
								<a href="javascript:void(0);" class="text-primary">Terms</a>
								<a href="javascript:void(0);" class="text-primary mx-5">Plans</a>
								<a href="javascript:void(0);" class="text-primary">Contact Us</a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
    setTimeout(() => {
        const el = document.getElementById('errorMessage');
        if (el) {
            el.style.transition = '0.5s';
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 500);
        }
    }, 5000); // 5000 ms = 5 seconds
</script>
@endsection