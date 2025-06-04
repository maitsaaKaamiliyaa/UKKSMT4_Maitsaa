@extends('backend.master')

@section('title')
    <title>Login | Aplikasi</title>
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap Gallery - Nyke Admin Template</title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

		<!-- *************
			************ CSS Files *************
		************* -->
        @include('include.style')
	</head>

	<body>
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
					<form class="my-5" method="post" action="{{ route('login.store') }}">
						@csrf
						<div class="border border-dark rounded-2 p-4 mt-5">
							<div class="login-form">
								<a href="index.html" class="mb-4 d-flex">
									<img src="{{ asset('assetsa/images/logo.svg') }}" class="img-fluid login-logo" alt="Nyke Admin" />
								</a>
								<div class="mb-3">
									<label class="form-label">Your Email</label>
									<input type="email" class="form-control" name="email" placeholder="Enter your email" />
								</div>
								<div class="mb-3">
									<label class="form-label">Your Password</label>
									<input type="password" class="form-control" name="password" placeholder="Enter password" />
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div class="form-check m-0">
										<input class="form-check-input" type="checkbox" value="" id="rememberPassword" />
										<label class="form-check-label" for="rememberPassword">Remember</label>
									</div>
									<a href="forgot-password.html" class="text-blue text-decoration-underline">Lost password?</a>
								</div>
								<div class="d-grid py-3 mt-4">
									<button type="submit" class="btn btn-lg btn-primary">
										Login
									</button>
								</div>
								<div class="text-center py-3">or Login with</div>
								<div class="d-flex gap-2 justify-content-center">
									<button type="submit" class="btn btn-outline-danger">
										<i class="bi bi-google me-2"></i>Gmail
									</button>
									<button type="submit" class="btn btn-outline-info">
										<i class="bi bi-facebook me-2"></i>Facebook
									</button>
								</div>
								<div class="text-center pt-4">
									<span>Not registered?</span>
									<a href="signup.html" class="text-blue text-decoration-underline ms-2">
										SignUp</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Container end -->
	</body>

</html>
@endsection