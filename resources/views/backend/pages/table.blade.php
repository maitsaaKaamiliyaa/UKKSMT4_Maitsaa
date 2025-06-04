@extends('backend.master')
@section('content')
					<!-- App hero header starts -->
					<div class="app-hero-header">
						<h5 class="fw-light">Welcome Bradford,</h5>
						<h3 class="fw-light mb-5">
							<span>Home</span> / <span class="menu-text">Tables</span>
						</h3>
					</div>
					<!-- App Hero header ends -->

					<!-- App body starts -->
					<div class="app-body">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table align-middle table-hover m-0">
												<thead>
													<tr>
														<th scope="col">Employee</th>
														<th scope="col">Position</th>
														<th scope="col">Address</th>
														<th scope="col">Age</th>
														<th scope="col">Start date</th>
														<th scope="col">Progress</th>
														<th scope="col">Salary</th>
														<th scope="col">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">
															<img class="rounded-circle img-3x me-2" src="assets/images/user.png"
																alt="Bootstrap Gallery" />
														</th>
														<td>Developer</td>
														<td>3994 Grant View Drive, Muskego, 53150</td>
														<td>28</td>
														<td>28/10/2022</td>
														<td>
															<div class="progress small">
																<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
																	aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>$92,000</td>
														<td>
															<a class="btn btn-info btn-sm" href="#"><i class="bi bi-pencil"></i>
															</a>
														</td>
													</tr>
													<tr>
														<th scope="row">
															<img class="rounded-circle img-3x me-2" src="assets/images/user.png"
																alt="Bootstrap Gallery" />
														</th>
														<td>Sales</td>
														<td>
															913 Alpaca Way, Garden Grove, California, 92643
														</td>
														<td>32</td>
														<td>30/10/2022</td>
														<td>
															<div class="progress small">
																<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
																	aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>$86,000</td>
														<td>
															<a class="btn btn-danger btn-icon btn-sm mb-1" href="#"><i class="bi bi-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<th scope="row">
															<img class="rounded-circle img-3x me-2" src="assets/images/user.png"
																alt="Bootstrap Gallery" />
														</th>
														<td>Developer</td>
														<td>
															2343 Burwell Heights Road, Nederland, Texas, 77627
														</td>
														<td>36</td>
														<td>16/11/2022</td>
														<td>
															<div class="progress small">
																<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
																	aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>$78,000</td>
														<td>
															<a class="btn btn-info btn-sm" href="#"><i class="bi bi-pencil"></i>
															</a>
														</td>
													</tr>
													<tr>
														<th scope="row">
															<img class="rounded-circle img-3x me-2" src="assets/images/user.png"
																alt="Bootstrap Gallery" />
														</th>
														<td>Designer</td>
														<td>
															2127 Boone Crockett Lane, Seattle, Washington,
															98109
														</td>
														<td>45</td>
														<td>21/12/2022</td>
														<td>
															<div class="progress small">
																<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
																	aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>$65,000</td>
														<td>
															<a class="btn btn-danger btn-icon btn-sm mb-1" href="#"><i class="bi bi-trash"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>Customer ID</th>
														<th>First Name</th>
														<th>Last Name</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Items Bought</th>
														<th>Money Spent</th>
														<th>Last Login</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#00001</td>
														<td><a href="#" class="text-red">Alia</a></td>
														<td>Willams</td>
														<td>+143-148-60985</td>
														<td>info@example.com</td>
														<td>250</td>
														<td>$4500</td>
														<td>10/10/2022 4:30pm</td>
													</tr>
													<tr>
														<td>#00002</td>
														<td><a href="#" class="text-red">Nathan</a></td>
														<td>James</td>
														<td>+278-119-88790</td>
														<td>info@example.com</td>
														<td>390</td>
														<td>$3500</td>
														<td>12/10/2022 2:37am</td>
													</tr>
													<tr>
														<td>#00003</td>
														<td><a href="#" class="text-red">Kelly</a></td>
														<td>Thomas</td>
														<td>+125-117-88763</td>
														<td>info@example.com</td>
														<td>135</td>
														<td>$2400</td>
														<td>14/10/2022 7:50pm</td>
													</tr>
													<tr>
														<td>#00004</td>
														<td><a href="#" class="text-red">Steve</a></td>
														<td>Smitth</td>
														<td>+334-676-66530</td>
														<td>info@example.com</td>
														<td>765</td>
														<td>$7890</td>
														<td>18/10/2022 9:30pm</td>
													</tr>
													<tr>
														<td>#00005</td>
														<td><a href="#" class="text-red">Kevin</a></td>
														<td>Oliver</td>
														<td>+435-667-99808</td>
														<td>info@example.com</td>
														<td>763</td>
														<td>$5690</td>
														<td>21/10/2022 3:20pm</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>#</th>
														<th>Heading 1</th>
														<th>Heading 2</th>
														<th>Heading 3</th>
														<th>Heading 4</th>
														<th>Heading 5</th>
														<th>Heading 6</th>
														<th>Heading 7</th>
														<th>Heading 8</th>
														<th>Heading 9</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>001</th>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
													</tr>
													<tr>
														<th>002</th>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
													</tr>
													<tr>
														<th>003</th>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
													</tr>
													<tr>
														<th>004</th>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
													</tr>
													<tr>
														<th>005</th>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
														<td>Long text</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped m-0">
												<thead>
													<tr>
														<th>Customer ID</th>
														<th>First Name</th>
														<th>Last Name</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Items Bought</th>
														<th>Money Spent</th>
														<th>Last Login</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#00001</td>
														<td><a href="#" class="text-red">Alia</a></td>
														<td>Willams</td>
														<td>+143-148-60985</td>
														<td>info@example.com</td>
														<td>250</td>
														<td>$4500</td>
														<td>10/10/2022 4:30pm</td>
													</tr>
													<tr>
														<td>#00002</td>
														<td><a href="#" class="text-red">Nathan</a></td>
														<td>James</td>
														<td>+278-119-88790</td>
														<td>info@example.com</td>
														<td>390</td>
														<td>$3500</td>
														<td>12/10/2022 2:37am</td>
													</tr>
													<tr>
														<td>#00003</td>
														<td><a href="#" class="text-red">Kelly</a></td>
														<td>Thomas</td>
														<td>+125-117-88763</td>
														<td>info@example.com</td>
														<td>135</td>
														<td>$2400</td>
														<td>14/10/2022 7:50pm</td>
													</tr>
													<tr>
														<td>#00004</td>
														<td><a href="#" class="text-red">Steve</a></td>
														<td>Smitth</td>
														<td>+334-676-66530</td>
														<td>info@example.com</td>
														<td>765</td>
														<td>$7890</td>
														<td>18/10/2022 9:30pm</td>
													</tr>
													<tr>
														<td>#00005</td>
														<td><a href="#" class="text-red">Kevin</a></td>
														<td>Oliver</td>
														<td>+435-667-99808</td>
														<td>info@example.com</td>
														<td>763</td>
														<td>$5690</td>
														<td>21/10/2022 3:20pm</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>Customer ID</th>
														<th>First Name</th>
														<th>Last Name</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Items Bought</th>
														<th>Money Spent</th>
														<th>Last Login</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#00001</td>
														<td>Alia</td>
														<td>Willams</td>
														<td>+143-148-60985</td>
														<td>info@example.com</td>
														<td>250</td>
														<td>$4500</td>
														<td>10/10/2022 4:30pm</td>
													</tr>
													<tr>
														<td>#00002</td>
														<td>Nathan</td>
														<td>James</td>
														<td>+278-119-88790</td>
														<td>info@example.com</td>
														<td>390</td>
														<td>$3500</td>
														<td>12/10/2022 2:37am</td>
													</tr>
													<tr>
														<td>#00003</td>
														<td>Kelly</td>
														<td>Thomas</td>
														<td>+125-117-88763</td>
														<td>info@example.com</td>
														<td>135</td>
														<td>$2400</td>
														<td>14/10/2022 7:50pm</td>
													</tr>
													<tr>
														<td>#00004</td>
														<td>Steve</td>
														<td>Smitth</td>
														<td>+334-676-66530</td>
														<td>info@example.com</td>
														<td>765</td>
														<td>$7890</td>
														<td>18/10/2022 9:30pm</td>
													</tr>
													<tr>
														<td>#00005</td>
														<td>Kevin</td>
														<td>Oliver</td>
														<td>+435-667-99808</td>
														<td>info@example.com</td>
														<td>763</td>
														<td>$5690</td>
														<td>21/10/2022 3:20pm</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table align-middle m-0">
												<thead>
													<tr>
														<th>Country</th>
														<th>Languages</th>
														<th>Population</th>
														<th>Median Age</th>
														<th>Area (Km²)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/hk.svg" class="img-1xx me-2" alt="Hong Kong" />Hong Kong
														</td>
														<td>Chinese (official), English</td>
														<td>7,39,000</td>
														<td>31.3</td>
														<td>1106</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/au.svg" class="img-1xx me-2" alt="Australia" />Australia
														</td>
														<td>English 79%, native and other languages</td>
														<td>23,630,169</td>
														<td>37.3</td>
														<td>7,739,983</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/tz.svg" class="img-1xx me-2" alt="Tanzania" />Tanzania
														</td>
														<td>
															Swahili (national), English, Arabic, Chaga,
															Makonde
														</td>
														<td>57,353,670</td>
														<td>39.1</td>
														<td>945,086</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/ru.svg" class="img-1xx me-2" alt="Russia" />Russia
														</td>
														<td>Russian, others</td>
														<td>142,467,651</td>
														<td>38.4</td>
														<td>17,076,310</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/de.svg" class="img-1xx me-2" alt="Germany" />Germany
														</td>
														<td>German, Danish, Low Rhenish, Romani</td>
														<td>82,081,261</td>
														<td>41.1</td>
														<td>357,386</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="5" class="text-center">
															Data retrieved from BootstrapGallery.
														</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered m-0">
												<thead>
													<tr>
														<th>#</th>
														<th>Title</th>
														<th>Module</th>
														<th>Reporter</th>
														<th>Status</th>
														<th>Owner</th>
														<th>Severity</th>
														<th>Created</th>
														<th>Updated</th>
														<th>Due</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>App crashes</td>
														<td>Main App</td>
														<td>Lewis</td>
														<td>
															<span class="badge border border-danger text-danger">Open</span>
														</td>
														<td>Micheal</td>
														<td>
															<span class="badge border border-success text-success">High</span>
														</td>
														<td>Aug-10, 2022</td>
														<td>Sep-14, 2022</td>
														<td>Oct-20, 2022</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Saving file</td>
														<td>Form Screen</td>
														<td>James</td>
														<td>
															<span class="badge border border-success text-success">In Progress</span>
														</td>
														<td>Donald</td>
														<td>
															<span class="badge border border-danger text-danger">Low</span>
														</td>
														<td>Aug-10, 2022</td>
														<td>Sep-14, 2022</td>
														<td>Oct-20, 2022</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Login fail</td>
														<td>Main App</td>
														<td>Powell</td>
														<td>
															<span class="badge border border-danger text-danger">Open</span>
														</td>
														<td>Glory</td>
														<td>
															<span class="badge border border-success text-success">High</span>
														</td>
														<td>Aug-10, 2022</td>
														<td>Sep-14, 2022</td>
														<td>Oct-20, 2022</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Saving file</td>
														<td>Form Screen</td>
														<td>James</td>
														<td>
															<span class="badge border border-success text-success">In Progress</span>
														</td>
														<td>Donald</td>
														<td>
															<span class="badge border border-danger text-danger">Low</span>
														</td>
														<td>Aug-10, 2022</td>
														<td>Sep-14, 2022</td>
														<td>Oct-20, 2022</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Login fail</td>
														<td>Main App</td>
														<td>Powell</td>
														<td>
															<span class="badge border border-success text-success">In Progress</span>
														</td>
														<td>Glory</td>
														<td>
															<span class="badge border border-success text-success">High</span>
														</td>
														<td>Aug-10, 2022</td>
														<td>Sep-14, 2022</td>
														<td>Oct-20, 2022</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection