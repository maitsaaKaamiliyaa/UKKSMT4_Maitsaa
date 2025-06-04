@extends('layouts.app_dashboard')

@section('content')
<!-- App hero header starts -->
<div class="app-hero-header">
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Admin</span> / <span>Table</span>
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
                                        <div class="d-flex gap-2 justify-content-end mb-3">
                                                    <a href="?pages=AB&aksi=tambah" type="submit" class="btn btn-primary">Tambah Biasa</a>
                                                    <button class="btn btn-primary">Print</button>
													</div>
											<table class="table align-middle table-hover m-0">
												<thead>
													<tr>
														<th scope="col">Kode Biaya</th>
														<th scope="col">Periode Biaya</th>
                                                        <th scope="col">Nominal</th>
                                                        <th scope="col">Status</th>
													</tr>
												</thead>
												<tbody>
                                                    <tr>
                                                        <td>wle</td>
                                                        <td>325</td>
                                                        <td>g</td>
                                                        <td>ghgv</td>
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
					<!-- App body ends -->
@endsection