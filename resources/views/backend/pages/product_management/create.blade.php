@extends('backend.master')

@section('content')
<!-- App hero header starts -->
<div class="app-hero-header">
    <h5 class="fw-light">Welcome,</h5>
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Product</span> / <span>Tambah</span>
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
                <div class="custom-tabs-container">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="oneA" role="tabpanel">
                            <!-- Row start -->
                            <div class="row justify-content-between">
                                <div class>
                                    <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title">Form Tambah Product</h5>
                                    </div>
                                        <div class="card-body">
                                            <!-- Row start -->
                                            <form method="POST" action="{{ route('product_management.product.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- Form Field Start -->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputIdSiswa">Nama Produk</label>
                                                            <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputIdSiswa"
                                                            name="name"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Ruangan</label>
                                                            <select class="form-select" name="ruangan_id">
                                                                <option value="">Silahkan Pilih Ruangan</option>
                                                                @foreach(
                                                                    $rooms as $room
                                                                )
                                                                <option  value="{{$room->id}}">{{$room->name?? 'Ruangan Tidak Ditemukan'}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleSelectJurusan">Price</label>
                                                            <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputIdSiswa"
                                                            name="price"/>
                                                        </div>
                                                    </div>

                                                                    <!-- Row end -->
                                                    <div class="d-flex gap-2 justify-content-end">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

</div>
<!-- App body ends -->
@endsection