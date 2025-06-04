@extends('backend.master')

@section('content')
<!-- App hero header starts -->
                    <div class="app-hero-header">
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Store Management</span> / <span>Product</span>
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
                                                        <th scope="col">Nama Toko</th>
													</tr>
												</thead>
												<tbody>
                                                    @forelse ($products as $i =>$item)
                                                        <tr>
                                                            <td>{{$i + 1}}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->room->name }}</td>
                                                            <td>...</td>
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
