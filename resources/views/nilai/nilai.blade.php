@extends('admin.index')
@section('content')
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
                            <h4 class="card-title mb-sm-0">Tabel nilai</h4>
                            <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">No</th>
                                        <th class="font-weight-bold">Nilai</th>
                                        <th class="font-weight-bold">Perihal</th>
                                        <th class="font-weight-bold">Guru</th>
                                        <th class=" font-weight-bold">tugas</th>
                                        <th class=" font-weight-bold">siswa</th>
                                        <th class="font-weight-bold">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach ($nilai as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->nilai }}</td>
                                        <td>{{ $row->perihal }}</td>
                                        <td>{{ $row->guru_id }}</td>
                                        <td>{{ $row->tugas_id }}</td>
                                        <td>{{ $row->siswa_id }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('nilai.destroy',$row->id) }}">
                                                @csrf
                                                @method('DELETE')

                                                {{-- ================ novia nilai Tidak Butuh Detail ==================== --}}
                                                {{-- <a href="{{ route('nilai.show', $row->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa-solid fa-eye"></i>
                                                </a> --}}
                                                &nbsp;
                                                <a class="btn btn-warning btn-sm" title="Ubah siswa" href=" {{ route('nilai.edit',$row->id) }}">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                                &nbsp;
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Pegawai" onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex mt-4 flex-wrap">
                            <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                            <nav class="ml-auto">
                                <ul class="pagination separated pagination-info">
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
</div>
</div>
@endsection