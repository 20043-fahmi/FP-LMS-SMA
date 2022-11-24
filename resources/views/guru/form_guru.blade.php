@extends('admin.index')
@section('content')
@php
$ar_gender = ['L','P'];
$ar_agama = ['Islam','Hindu','Budha','Kristen','Lainya'];
@endphp
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
                        <a href="https://www.bootstrapdash.com/product/stellar-admin/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">Upgrade To Pro</a>
                        <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="admin/images/guru/guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <form action="{{route('guru.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row"> 
                            <div class="col form-group">
                                <input type="text" name="nip" class="form-control" id="" placeholder="NIP" required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="nama" id="" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="alamat" id="" placeholder="Alamat" required>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group">
                                <input type="date" name="tgl_lahir" class="form-control" id="" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="col form-group">
                                <select class="form-control form-control-lg countrylist" name="gender">
                                    <option selected>----- Jenis Kelamin -----</option>
                                    @foreach ($ar_gender as $g)
                                        <option value="{{ $g }}">{{ $g }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="tempat_lahir" class="form-control" id="" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="no_telp" id="" placeholder="Nomer Telp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group">
                                <input type="text" name="email" class="form-control" id="" placeholder="email" required>
                            </div>
                            <div class="col form-group">
                                <select class="form-control form-control-lg countrylist" name="agama">
                                    <option selected>----- Agama -----</option>
                                    @foreach ($ar_agama as $agama)
                                        <option value="{{ $agama }}">{{ $agama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="foto" id="" placeholder="Foto">                              
                        </div> 

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection