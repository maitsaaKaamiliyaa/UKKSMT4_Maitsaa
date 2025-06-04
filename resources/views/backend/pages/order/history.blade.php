@extends('backend.master')

@section('content')
<!-- App hero header starts -->
                    <div class="app-hero-header">
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Order Here</span> / <span>History Pembelian</span>
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
                                                    <a href="{{ route('product_management.product.create')}}" type="submit" class="btn btn-primary">Add Product</a>
                                                    <button class="btn btn-primary">Print</button>
													</div>
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
                                                    @forelse ($orders as $i =>$item)
                                                        <tr>
                                                            <td>{{$i + 1}}</td>
                                                            <td>{{$item->product->name}}</td>
                                                            <td>Rp{{ number_format($item->product->price, 0, ',', '.')}}</td>
                                                            @php
                                                                switch($item->status){
                                                                    case 0 : $status = "PENDDING";break;
                                                                    case 1 : $status = "PROGRESS";break;
                                                                    case 2 : $status = "SELESAI";break;
                                                                }
                                                            @endphp
                                                            <td>{{$status}}</td>
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
