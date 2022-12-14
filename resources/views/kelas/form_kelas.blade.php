@extends('admin.index')
@section('content')
@if (Auth::user()->role =='administrator')

<div class="main-panel">
    <div class="content-wrapper">
        <!-- // ============================= Fergi : Membuat Form Input Tugas ========================= -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    
                    <img src="admin/images/guru/guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning fs-4 fw-bold" role="alert">
                        #Form Kelas
                    </div>
                    <form action="{{route('kelas.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="kelas" class="form-control" id="" placeholder="Masukan Kelas" required>
                        </div>

                        <div class="text-center"><button type="submit" class="form-control submit-btn">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@else
@include('layouts.accessdenied')
@endif
@endsection