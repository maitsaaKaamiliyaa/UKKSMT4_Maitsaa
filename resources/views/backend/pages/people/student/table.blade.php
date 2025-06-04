@extends('backend.master')

@section('title')
    <title>Employee | Aplikasi</title>
@endsection

@section('content')
<!-- App hero header starts -->
                    <div class="app-hero-header">
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Human Resources</span> / <span>Student</span>
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
                                                    <a href="/dashboard/student/add" type="submit" class="btn btn-primary">Add Student</a>
                                                    <button class="btn btn-primary">Print</button>
													</div>
											<table class="table align-middle table-hover m-0">
												<thead>
													<tr>
														<th scope="col">NISN/NIS</th>
														<th scope="col">Name</th>
                                                        <th scope="col">Sex</th>
                                                        <th scope="col">place and date of birth</th>
                                                        <th scope="col">Saldo</th>
                                                        <th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
                                                    @forelse ($student as $item)
                                                        <tr>
                                                            <td>{{optional($item->reference)->nisn}} / {{optional($item->reference)->nis}}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->sex }}</td>
                                                            <td>{{ $item->pob }} -- {{ $item->dob }}</td>
                                                            <td>Rp {{ number_format($item->reference->saldo->saldo ?? 0, 0, ',', '.') }}</td>
                                                            <td>...</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6">Tidak ada data Siswa.</td>
                                                        </tr>
                                                    @endforelse
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