<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\EnrolController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DataSeederController;


Route::get('/', [MentorController::class, 'home'])->name('home');

// Menggunakan resource untuk controller lainnya
Route::resource('login', LoginController::class);
Route::resource('Siswa', SiswaController::class);
Route::resource('mentor', MentorController::class);
Route::resource('enrol', EnrolController::class);
Route::resource('ulasan', UlasanController::class);


Route::post('/seed-mentor', [DataSeederController::class, 'seedMentor'])->name('seed.mentor');
Route::post('/seed-kursus', [DataSeederController::class, 'seedKursus'])->name('seed.kursus');


Route::get('/home', function () {
    return view('home');
})->name('home');

// Route untuk halaman utama kursus
Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.kursus')->middleware('auth');

// Route untuk halaman detail kursus
Route::get('/kursus/{id}', [KursusController::class, 'show'])->name('kursus.detail')->middleware('auth');

// Route login
Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');

// Route logout
Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');


Route::get('/Siswa', [SiswaController::class, 'index'])->name('siswa.index'); // Menampilkan daftar siswa
// Route::post('/Siswa', [SiswaController::class, 'store'])->name('siswa.store');


Route::get('/Siswa/{nama}/edit', [SiswaController::class, 'edit'])->name('siswa.edit')->middleware('auth');

// Route untuk menyimpan perubahan (update)
Route::put('/Siswa/{nama}/edit', [SiswaController::class, 'update'])->name('siswa.update')->middleware('auth');



// Route to show the enrolment form and pass the course ID
Route::get('/enrol/create/{kursusId}', [EnrolController::class, 'create'])->name('enrol.create')->middleware('auth');
Route::post('/enrol/create/{kursusId}', [EnrolController::class, 'store'])->name('enrol.store')->middleware('auth');


Route::post('kursus/{kursusId}/ulasan', [UlasanController::class, 'store'])->name('ulasan.store')->middleware('auth');
Route::get('/kursus/{id}', [KursusController::class, 'show'])->name('kursus.show')->middleware('auth');;

Route::get('/riwayat-pembayaran', [EnrolController::class, 'riwayatPembayaran'])->name('riwayat-pembayaran')->middleware('auth');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');
