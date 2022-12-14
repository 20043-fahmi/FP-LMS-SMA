@extends('admin.index')
@section('content')
@php
$ar_gender = ['L','P'];
$ar_agama = ['Islam','Hindu','Khatolik','Budha','Kristen','Lainya'];
@endphp
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary motivasi">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">"Belajar memang kadang membosankan tapi demi menggapai impianmu dan masa depan yang cerah, bersemangatlah dalam mencari ilmu." </p>
                        <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Tabel Guru</h4>
                            <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                        </div>

                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Form Input Siswa</h5>

                                            <div class="alert alert-danger">

                                            </div>
                                            <form method="POST" action="{{route('siswa.store')}}">
                                                @csrf
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">NISN</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="NISN" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="nama_siswa" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="tempat_lahir" class="form-control">
                                                    </div>
                                                </div>

                                                <fieldset class="row mb-3">
                                                    <div class="form-group row">
                                                        <label for="no_hp" class="col-sm-3 col-form-label">jenis kelamin</label>
                                                        <div class="col-sm-9">
                                                            <div class="col-sm-10">
                                                                @foreach($ar_gender as $gender)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gender" value="{{ $gender }}">
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        {{ $gender }}
                                                                    </label>
                                                                </div>

                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <div class="row mb-3">
                                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="tgl_lahir" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">agama</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="agama">
                                                            <option selected>-- Pilih agama --</option>
                                                            @foreach($ar_agama as $agama)
                                                            <option value="{{ $agama }}">{{ $agama }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="alamat" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="foto">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10 ">

                                                        <a class="btn btn-info" title="Kembali" href=" {{ url('siswa') }}">
                                                            <i class="bi bi-arrow-left-square"> Kembali</i>
                                                        </a>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-primary" title="Simpan siswa"><i class="bi bi-save"></i> Simpan</button>
                                                    </div>
                                                </div>

                                            </form><!-- End General Form Elements -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
