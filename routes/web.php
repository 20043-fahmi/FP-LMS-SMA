<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\eventController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// ------------- Routing LandingPage ------------
Route::get('/', function () {
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/portofolio', function () {
    return view('landingpage.portofolio');
});

Route::get('/contact', function () {
    return view('landingpage.contact');
});

// ------------- Routing Admin Page ------------
Route::get('/administrator', function () {
    return view('admin.dasboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::get(
    'dashboard',
    [DashboardController::class, 'index']
);


Route::get('/laporan_akademik', function () {
    return view('admin.laporan_akademik');
});

// Route::get('/guru', function () {
//     return view('admin.guru');
// });

Route::get('/form_siswa', function () {
    return view('siswa.form_siswa');
});
Route::get('/form_guru', function () {
    return view('guru.form_guru');
});

Route::get('/masuk', function () {
    return view('Auth.masuk');
});

Route::get('/tugas', function () {
    return view('tugas.index');
});
Route::get('/form_tugas', function () {
    return view('tugas.form_tugas');
});

Route::get('/form_nilai', function () {
    return view('nilai.form_nilai');
});

Route::get('/form_jadwal', function () {
    return view('jadwal.form_jadwal');
});
Route::get('/nilai', function () {
    return view('nilai.index');
});
// Route::get('/kalender', function () {
//     return view('admin.kalender');
// });

// Route::get('/mapel', function () {
//     return view('mapel.mapel');
// });
// Route::get('/form_mapel', function () {
//     return view('mapel.form_mapel');
// });
Route::get('/event', function () {
    return view('event.index');
});


Route::resource('staff', StaffController::class);
Route::resource('siswa', siswaController::class);
Route::resource('guru', guruController::class);
Route::resource('tugas', tugasController::class);
Route::resource('jadwal', jadwalController::class);
Route::resource('nilai', nilaiController::class);
Route::resource('event', eventController::class);


Route::get('generate-pdf', [guruController::class, 'generatePDF']);
Route::get('guru-pdf', [guruController::class, 'guruPDF']);



// Route::resource('mapel', mapelController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/user', function () {
 //   return view('Layout.user');
//});
