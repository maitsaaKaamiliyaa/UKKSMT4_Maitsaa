@extends('backend.master')
@section('content')
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
					<form action="index.html" class="my-5">
						<div class="border border-dark rounded-2 p-4 mt-5">
							<div class="login-form">
								<a href="index.html" class="mb-4 d-flex">
									<img src="assets/images/logo.svg" class="img-fluid login-logo" alt="Nyke Admin" />
								</a>
								<h5 class="fw-light mb-5">Create your admin account.</h5>
								<div class="mb-3">
									<label class="form-label">Your Email</label>
									<input type="text" class="form-control" placeholder="Enter your email" />
								</div>
								<div class="mb-3">
									<label class="form-label">Your Password</label>
									<input type="password" class="form-control" placeholder="Enter password" />
								</div>
								<div class="mb-3">
									<label class="form-label">Confirm Password</label>
									<input type="password" class="form-control" placeholder="Re-enter password" />
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div class="form-check m-0">
										<input class="form-check-input" type="checkbox" value="" id="termsConditions" />
										<label class="form-check-label" for="termsConditions">I agree to the terms and conditions</label>
									</div>
								</div>
								<div class="d-grid py-3 mt-4">
									<button type="submit" class="btn btn-lg btn-primary">
										Signup
									</button>
								</div>
								<div class="text-center py-3">or Signup with</div>
								<div class="d-flex gap-2 justify-content-center">
									<button type="submit" class="btn btn-outline-danger">
										<i class="bi bi-google"></i>
									</button>
									<button type="submit" class="btn btn-outline-info">
										<i class="bi bi-facebook"></i>
									</button>
								</div>
								<div class="text-center pt-4">
									<span>Already have an account?</span>
									<a href="login.html" class="text-blue text-decoration-underline ms-2">
										Login</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Container end -->
@endsection