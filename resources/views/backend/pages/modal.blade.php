@extends('backend.master')
@section('content')
					<!-- App hero header starts -->
					<div class="app-hero-header">
						<h5 class="fw-light">Welcome Bradford,</h5>
						<h3 class="fw-light mb-5">
							<span>Home</span> / <span>Components</span> /
							<span class="menu-text">Modals</span>
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
										<div class="modal position-static d-block shade-secondary rounded-3" tabindex="-1" role="dialog"
											id="modalSheet">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Modal title</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<p>
															This is a modal sheet, a variation of the modal
															that docs itself to the bottom of the viewport
															like the newer share sheets in iOS.
														</p>
													</div>
													<div class="modal-footer flex-column">
														<button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2">
															Save changes
														</button>
														<button type="button" class="btn btn-lg btn-secondary w-100 mx-0" data-bs-dismiss="modal">
															Close
														</button>
													</div>
												</div>
											</div>
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
									<div class="card-body">
										<div class="modal modal-alert position-static d-block bg-primary rounded-3" tabindex="-1"
											role="dialog" id="modalChoice">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-body p-4 text-center">
														<h5 class="text-primary">Enable this setting?</h5>
														<p class="mb-0">
															You can always change your mind in your account
															settings.
														</p>
													</div>
													<div class="modal-footer flex-nowrap p-0">
														<button type="button" class="btn text-primary fs-6 col-6 m-0 border-end">
															<strong>Yes, enable</strong>
														</button>
														<button type="button" class="btn text-secondary fs-6 col-6 m-0" data-bs-dismiss="modal">
															No thanks
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-4">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											Launch demo modal
										</button>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">
															Modal title
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">...</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-xxl-4">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#staticBackdrop">
											Launch static backdrop modal
										</button>
										<!-- Modal -->
										<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
											tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="staticBackdropLabel">
															Modal title
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">...</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="button" class="btn btn-primary">
															Understood
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-xxl-4">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalScrollable">
											Launch demo modal
										</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleModalScrollable" tabindex="-1"
											aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-scrollable">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalScrollableTitle">
															Modal title
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<p>
															This is some placeholder content to show the
															scrolling behavior for modals. We use repeated
															line breaks to demonstrate how content can exceed
															minimum inner height, thereby showing inner
															scrolling. When content becomes longer than the
															predefined max-height of modal, content will be
															cropped and scrollable within the modal.
														</p>
														<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
														<p>
															This content should appear at the bottom after you
															scroll.
														</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-xxl-4">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalCenter">
											Vertically centered modal
										</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleModalCenter" tabindex="-1"
											aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalCenterTitle">
															Modal title
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<p>This is a vertically centered modal.</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-xxl-4">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalCenteredScrollable">
											Vertically centered scrollable modal
										</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
											aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalCenteredScrollableTitle">
															Modal title
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<p>
															This is some placeholder content to show a
															vertically centered modal. We've added some extra
															copy here to show how vertically centering the
															modal works when combined with scrollable modals.
															We also use some repeated line breaks to quickly
															extend the height of the content, thereby
															triggering the scrolling. When content becomes
															longer than the predefined max-height of modal,
															content will be cropped and scrollable within the
															modal.
														</p>
														<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
														<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
														<p>Just like that.</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-xxl-4">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Modal -->
										<div class="modal fade" id="exampleModalToggle" aria-hidden="true"
											aria-labelledby="exampleModalToggleLabel" tabindex="-1">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalToggleLabel">
															Modal 1
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														Show a second modal and hide this one with the
														button below.
													</div>
													<div class="modal-footer">
														<button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
															data-bs-toggle="modal">
															Open second modal
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
											aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalToggleLabel2">
															Modal 2
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														Hide this modal and show the first with the button
														below.
													</div>
													<div class="modal-footer">
														<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
															Back to first
														</button>
													</div>
												</div>
											</div>
										</div>
										<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open
											first modal</a>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-xxl-12">
								<!-- Card start -->
								<div class="card shadow mb-4">
									<div class="card-body">
										<!-- Modal XL -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalXl">
											Extra large modal
										</button>
										<!-- Modal XL -->
										<div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel"
											aria-hidden="true">
											<div class="modal-dialog modal-xl">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title h4" id="exampleModalXlLabel">
															Extra large modal
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">...</div>
												</div>
											</div>
										</div>

										<!-- Modal LG -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalLg">
											Large modal
										</button>
										<div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel"
											aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title h4" id="exampleModalLgLabel">
															Large modal
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">...</div>
												</div>
											</div>
										</div>

										<!-- Modal SM -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalSm">
											Small modal
										</button>
										<div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel"
											aria-hidden="true">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title h4" id="exampleModalSmLabel">
															Small modal
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">...</div>
												</div>
											</div>
										</div>

										<!-- Modal Fullscreen -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#exampleModalFullscreen">
											Full screen
										</button>
										<!-- Modal Fullscreen -->
										<div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
											aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
											<div class="modal-dialog modal-fullscreen">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title h4" id="exampleModalFullscreenLabel">
															Full screen modal
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">...</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- App body ends -->
@endsection