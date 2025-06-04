@extends('backend.master')
@section('content')
					<!-- App header ends -->

					<!-- App hero header starts -->
					<div class="app-hero-header">
						<h5 class="fw-light">Welcome Bradford,</h5>
						<h3 class="fw-light mb-5">
							<span>Home</span> / <span>Form Layouts</span>
						</h3>
					</div>
					<!-- App Hero header ends -->

					<!-- App body starts -->
					<div class="app-body">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Form Layout</h5>
									</div>
									<div class="card-body">
										<!-- Row start -->
										<div class="row">
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Name</label>
													<input type="text" class="form-control" placeholder="Enter fullname" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Email</label>
													<input type="email" class="form-control" placeholder="Enter email address" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Phone</label>
													<input type="number" class="form-control" placeholder="Enter phone number" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Company</label>
													<input type="text" class="form-control" placeholder="Enter company name" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Business Address</label>
													<input type="text" class="form-control" placeholder="Enter business address" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Province/Territory</label>
													<input type="text" class="form-control" placeholder="Enter province/territory" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Industry Type</label>
													<select class="form-select">
														<option value="0">Select</option>
														<option value="1">One</option>
													</select>
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="Enter postal code" />
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Message</label>
													<textarea class="form-control" placeholder="Enter message" rows="3"></textarea>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
									<div class="card-footer">
										<div class="d-flex gap-2 justify-content-end">
											<button type="button" class="btn btn-outline-secondary">
												Cancel
											</button>
											<button type="button" class="btn btn-primary">
												Submit
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Form Layout 2</h5>
									</div>
									<div class="card-body">
										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-12">
												<div class="bg-light bg-opacity-50 p-3 mb-3 fw-bold">
													Account Details
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Name</label>
													<input type="text" class="form-control" placeholder="Enter fullname" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Email</label>
													<input type="email" class="form-control" placeholder="Enter email address" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Phone</label>
													<input type="number" class="form-control" placeholder="Enter phone number" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Company</label>
													<input type="text" class="form-control" placeholder="Enter company name" />
												</div>
											</div>
										</div>
										<!-- Row end -->

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-12">
												<div class="bg-light bg-opacity-50 p-3 mt-4 mb-3 fw-bold">
													Business Address
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Business Address</label>
													<input type="text" class="form-control" placeholder="Enter business address" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Province/Territory</label>
													<input type="text" class="form-control" placeholder="Enter province/territory" />
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Industry Type</label>
													<select class="form-select">
														<option value="0">Select</option>
														<option value="1">One</option>
													</select>
												</div>
											</div>
											<div class="col-lg-3 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="Enter postal code" />
												</div>
											</div>
										</div>
										<!-- Row end -->

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-12">
												<div class="bg-light bg-opacity-50 p-3 mt-4 mb-3 fw-bold">
													Billing Details
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Amount</label>
													<div class="input-group">
														<input type="text" class="form-control" />
														<span class="input-group-text">$</span>
														<span class="input-group-text">0.00</span>
													</div>
												</div>
											</div>

											<div class="col-lg-4 col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Billing Interval</label>
													<div class="mt-2">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
																value="option1" />
															<label class="form-check-label" for="inlineRadio1">Monthly</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
																value="option2" checked="" />
															<label class="form-check-label" for="inlineRadio2">Quatrerly</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
																value="option3" />
															<label class="form-check-label" for="inlineRadio3">Yearly</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Row end -->

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-12">
												<div class="bg-light bg-opacity-50 p-3 mt-4 mb-3 fw-bold">
													Communication
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Communication</label>
													<div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
															<label class="form-check-label" for="inlineCheckbox1">Email</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"
																checked="" />
															<label class="form-check-label" for="inlineCheckbox2">SMS</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" />
															<label class="form-check-label" for="inlineCheckbox3">Phone</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Message</label>
													<textarea type="text" class="form-control" placeholder="Enter message" rows="3"></textarea>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
									<div class="card-footer">
										<div class="d-flex gap-2 justify-content-end">
											<button type="button" class="btn btn-outline-secondary">
												Cancel
											</button>
											<button type="button" class="btn btn-primary">
												Submit
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- App body ends -->
                     @endsection