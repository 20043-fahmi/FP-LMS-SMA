@extends('admin.index')
@section('content')

@php
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Tugas;

$ar_guru = Guru::all();
$ar_tugas = Tugas::all();
$ar_siswa = Siswa::all();

@endphp


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary motivasi">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">"Belajar memang kadang membosankan tapi demi menggapai impianmu dan masa depan yang cerah, bersemangatlah dalam mencari ilmu." </p>
                    </span>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Input nilai</h5>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif


                            <form method="POST" action="{{route('nilai.store')}}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">nilai</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nilai" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">perihal</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perihal" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">guru </label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="guru_id">
                                            <option selected >-- Pilih guru --</option>
                                            @foreach($ar_guru as $guru)
                                            <option value=" {{$guru->id}} ">{{$guru->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">tugas </label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="tugas_id">
                                            <option selected>-- Pilih tugas --</option>
                                            @foreach ($ar_tugas as $tugas)
                                            <option value="{{ $tugas->id }}">{{ $tugas->keterangan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">siswa</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="siswa_id">
                                            <option selected>-- Pilih siswa --</option>
                                            @foreach ($ar_siswa as $siswa)
                                            <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10 ">

                                        <button type="submit" class="form-control submit-btn" title="Simpan siswa"><i class="bi bi-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

</div>
</div>
</div>

@endsection