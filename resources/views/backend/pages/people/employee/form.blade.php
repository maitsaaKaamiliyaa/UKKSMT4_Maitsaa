@extends('backend.master')

@section('content')
<!-- App hero header starts -->
<div class="app-hero-header">
    <h5 class="fw-light">Welcome,</h5>
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span>Employee</span> / <span>Tambah</span>
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
                                        <h5 class="card-title">Form Tambah Employee</h5>
                                    </div>
                                        <div class="card-body">
                                            <!-- Row start -->
                                            <form method="POST" action="{{ route('employee.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- Form Field Start -->
                                                        <div class="mb-3">
                                                            <input type="hidden" name="status" value="active">
                                                            <input type="hidden" name="role" value="user">
                                                            <label class="form-label" for="inputIdSiswa">No. Pegawai</label>
                                                            <input
                                                            type="text"
                                                            class="form-control"
                                                            id="no_pegawai" name="no_pegawai"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleSelectJurusan">Email</label>
                                                            <input type="email" class="form-control" id="inputIdSiswa" name="email"  />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleSelectJurusan">Username</label>
                                                            <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputIdSiswa"
                                                            name="username"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleSelectJurusan">Password</label>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password">
                                                                <span class="input-group-text">.</span>
                                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Konfirmasi Password">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="inputNoTelf">Name</label>
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="inputNoTelf" name="name" />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleSelectJurusan">Place and Date of Birth</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="pob" name="pob" placeholder="Place">
                                                                <input type="date" class="form-control" id="example_date" name="dob">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleSelectJurusan">Hire Date</label>
                                                            <input
                                                            type="date"
                                                            class="form-control" id="hire" name="hire_date"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="exampleInputjenkel" name="jenkel">Jenis Kelamin</label><br>
                                                            <input type="radio" name="sex" id="exampleInputjenkel" value="laki-laki"> Laki-Laki<br>
                                                            <input type="radio" name="sex" id="exampleInputjenkel" value="perempuan"> Perempuan
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