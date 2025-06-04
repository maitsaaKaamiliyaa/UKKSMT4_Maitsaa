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

		@include('include.styledash')
	</head>

	<body>
		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				<nav id="sidebar" class="sidebar-wrapper">

					<!-- App brand starts -->
					<div class="app-brand px-3 py-3 d-flex align-items-center">
						<a href="index.html">
							<img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
						</a>
					</div>
					<!-- App brand ends -->

					<!-- Sidebar profile starts -->
					<div class="sidebar-user-profile">
						<img src="assets/images/user.png" class="profile-thumb rounded-2 p-2 d-lg-flex d-none"
							alt="Bootstrap Gallery" />
						<h5 class="profile-name lh-lg mt-2 text-truncate">Harriet Bradford</h5>
						<ul class="profile-actions d-flex m-0 p-0">
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-skype fs-4"></i>
									<span class="count-label"></span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-dribbble fs-4"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-twitter fs-4"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- Sidebar profile ends -->

					<!-- Sidebar menu starts -->
					<div class="sidebarMenuScroll">
						<ul class="sidebar-menu">
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-columns-gap"></i>
									<span class="menu-text">Master</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="form-inputs.html">Home</a>
									</li>
									<li>
										<a href="form-checkbox-radio.html">Setting</a>
									</li>
									<li>
										<a href="form-file-input.html">Profile</a>
									</li>
									<li>
										<a href="form-validations.html">Invoice</a>
									</li>
									<li>
										<a href="{{ route('tampil.admin') }}">Tampil</a>
									</li>
									<li>
										<a href="form-layouts.html">Tambah</a>
									</li>
								</ul>
							</li>
							<li class="active current-page">
								<a href="{{ route('/dashboard')}}">
									<i class="bi bi-bar-chart-line"></i>
									<span class="menu-text">Analytics</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-code-square"></i>
									<span class="menu-text">Forms</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="form-inputs.html">Form Inputs</a>
									</li>
									<li>
										<a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
									</li>
									<li>
										<a href="form-file-input.html">File Input</a>
									</li>
									<li>
										<a href="form-validations.html">Validations</a>
									</li>
									<li>
										<a href="date-time-pickers.html">Date Time Pickers</a>
									</li>
									<li>
										<a href="form-layouts.html">Form Layouts</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Sidebar menu ends -->

				</nav>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">

					<!-- nav -->
					@include('layouts.assets.nav')
					<!-- end nav -->

					<!-- content -->
					 @yield('content')
					<!-- content end -->
				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		@include('include.scriptdash')
	</body>

</html>