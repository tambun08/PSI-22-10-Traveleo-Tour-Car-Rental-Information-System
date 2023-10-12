<?php

use App\Http\Controllers\Dashboard\AssignSupir\AssignSupirController;
use App\Http\Controllers\Dashboard\Supir\SupirController;
use App\Http\Controllers\Dashboard\Operator\OperatorController;
use App\Http\Controllers\Dashboard\Booking\BookingController;
use App\Http\Controllers\Dashboard\Cars\CarsController;
use App\Http\Controllers\Dashboard\Persetujuan\PersetujuanController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProsesPinjam\ProsesPinjamController;
use App\Http\Controllers\Dashboard\RiwayatPesanan\RiwayatPesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Models\Cars;

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


Route::get('/', function () {
    $cars = Cars::get();
    return view('home',compact('cars'));
});
Route::get('/home', [\App\Http\Controllers\WelcomeController::class, "index"]);

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::group(['namespace' => 'Cars'], function () {
        Route::resource('/cars', 'CarsController');
    });

    Route::group(['namespace' => 'Booking'], function () {
        Route::resource('/booking', 'BookingController');
        Route::get('/pesan/{id}', [BookingController::class, 'pesan'])->name('booking.pesan');
        Route::post('/konfirmasi', [BookingController::class, 'konfirmasi'])->name('booking.konfirmasi');
    });

    Route::group(['namespace' => 'ProsesPinjam'], function () {
        Route::resource('/proses-pinjam', 'ProsesPinjamController');
        Route::post('/kembali', [ProsesPinjamController::class, 'kembali'])->name('proses-pinjam.kembali');
    });

    Route::group(['namespace' => 'User'], function () {
        Route::resource('/user', 'UserController');
    });
    Route::group(['namespace' => 'Operator'], function () {
        Route::resource('/operator', 'OperatorController');
    });

    Route::group(['namespace' => 'Selesai'], function () {
        Route::resource('/selesai', 'SelesaiController');
        Route::get('/cetaklaporan', 'SelesaiController@cetaklaporan')->name('cetaklaporan');
    });

    Route::group(['namespace' => 'RiwayatPesanan'], function () {
        Route::resource('/riwayat-pesanan', 'RiwayatPesananController');
    });
    Route::group(['namespace' => 'Pembayaran'], function () {
        Route::resource('/Pembayaran', 'PembayaranController');
    });

    Route::group(['namespace' => 'Supir'], function () {
        Route::resource('/supir', 'SupirController');
    });

    Route::group(['namespace' => 'Persetujuan'], function () {
        Route::resource('/persetujuan', 'PersetujuanController');
    });

    Route::group(['namespace' => 'AssignSupir'], function () {
        Route::get('/assign-supir/{booking}', [AssignSupirController::class, 'create_assign'])->name('create_assign');
        Route::post('/assign-supir/{booking}', [AssignSupirController::class, 'store_assign'])->name('store_assign');
        Route::get('/detail-assign/{booking}', [AssignSupirController::class, 'detail_assign'])->name('detail_assign');
    });

    Route::group(['namespace' => 'Operator'], function () {
        Route::resource('/operator', 'OperatorController');
    });

    Route::group(['namespace' => 'Penyewa'], function () {
        Route::resource('/penyewa', 'UserController');
    });

    Route::get('/dashboard.supir.index', 'App\Http\Controllers\Dasboard\Supir\SupirController@index');
    Route::get('/dashboard.supir.create', 'App\Http\Controllers\Dasboard\Supir\SupirController@create');
    Route::post('/dashboard.mobil.create', [SupirController::class, 'store']);


    Route::get('/dashboard.mobil.tambah', 'App\Http\Controllers\Dasboard\Cars\CarsController@create');
    // Route::get('/dashboard.mobil.tambah', [CarsController::class, 'create']);
    Route::post('/dashboard.mobil.tambah', [CarsController::class, 'store']);
});

require __DIR__ . '/auth.php';
