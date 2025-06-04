@extends('backend.master')

@section('content')
<!-- App hero header starts -->
                    <div class="app-hero-header">
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Store Management</span> / <span>Room</span>
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
                                                    <a href="{{ route('room_management.room.create')}}" type="submit" class="btn btn-primary">Add Room</a>
                                                    <button class="btn btn-primary">Print</button>
													</div>
											<table class="table align-middle table-hover m-0">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Name</th>
                                                        <th scope="col">Pegawai</th>
													</tr>
												</thead>
												<tbody>
                                                    @forelse ($rooms as $item)
                                                        <tr>
                                                            <td>{{ $item->no }}</td>
                                                            <td>{{ $item->name }}</td>
                                                                <div class="btn-group mb-2">
                                                                    @if(isset($item->employeeHasRoom))
                                                                    <td>{{$item->employeeHasRoom->employee->people->name}}</td>
                                                                    @else
                                                                    <a role="button" href="{{ route('room_management.room.viewEmployeeToRoom',
                                                                    [
                                                                    'ruangan_id' => $item->id
                                                                    ])}}" class="btn btn-success">Pilih Pegawai</a>
                                                                    @endif
                                                                </div>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">Tidak ada data Ruangan.</td>
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
