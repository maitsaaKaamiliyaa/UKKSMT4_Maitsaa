@extends('backend.master')

@section('content')
<!-- App hero header starts -->
                    <div class="app-hero-header">
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Order Here</span> / <span>Order</span>
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
														<th scope="col">No</th>
														<th scope="col">Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
                                                    @forelse ($products as $i =>$item)
                                                        <tr>
                                                            <td>{{$i + 1}}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>Rp{{ number_format($item->price, 0, ',', '.')}}</td>
                                                            <td>
                                                                <div class="btn-group mb-2">
                                                                    <form action="{{ route('order.process')}}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                                        <input type="hidden" name="paid" value="{{ $item->price }}">
                                                                        <button href="" role="button" type="submit" class="btn btn-primary">Order Makanan</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">Tidak ada data Produk.</td>
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
