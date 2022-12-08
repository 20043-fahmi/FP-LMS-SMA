@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
                    </span>
                </div>
            </div>
        </div>

        <!-- // ============================= Fergi : Membuat Form Input Tugas ========================= -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="admin/images/guru/guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <form action="{{route('tugas.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="mb-3">
                                <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-4 form-group">
                                    <select class="form-control form-control-lg countrylist" name="hari">
                                        <option selected>----- Hari -----</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <input type="date" name="tanggal" class="form-control" id="" placeholder="Tanggal" required>
                                </div>
                                <div class="col-3 form-group">
                                    <input type="time" class="form-control" name="jam" id="" placeholder="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="perihal" class="form-control" id="" placeholder="Perihal" required>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control" name="upload" id="" placeholder="Upload">
                            </div>

                            {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                            <div class="text-center"><button type="submit" class="form-control submit-btn">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection