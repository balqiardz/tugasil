<?php

use Illuminate\Support\Facades\Route;

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
//     return 'Hello World';
// });

// Route::get('/Profile', function () {
//     $nama = ' Balqis';
//     $tgl_lahir = ' 2003-02-24';
//     return 'Ini adalah halaman Profile' . $nama . ', Lahir Pada Tanggal' . $tgl_lahir;
// });

Route::get('/', function () {
    return view('Home');
});

Route::get('profile', function () {
    return view('Profile');
});

Route::get('mahasiswa', function () {
    return view('Mahasiswa');
});

Route::get('about', function () {
    return view('About');
});

Route::get('perulangan', function () {
    $nilai_awal = 1;
    $mobil_rusak = 5;
    $jumlah_mobil = 10;
    while ($nilai_awal <= $jumlah_mobil) {
        // if ($nilai_awal > $mobil_rusak) {
        //     echo "Mobil ke- " . $nilai_awal . ' dalam kondisi rusak!<br>';
        // }
        // else{
        //     echo "Mobil ke- ". $nilai_awal . ' beroperasi dengan baik!<br>';
        // }
        if ($nilai_awal <= $mobil_rusak) {
            echo "Mobil ke- ". $nilai_awal . ' beroperasi dengan baik!<br>';
        }
        $nilai_awal++;
    }
    echo '<hr>';
    for ($i = $mobil_rusak + 1; $i <= $jumlah_mobil; $i++) {
        echo 'Mobil ke-' . $i . 'dalam kondisi rusak!<br>';
    }
    // return view('');
});