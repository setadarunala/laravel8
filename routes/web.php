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

Route::get('/', function () {
    return view('home');
});

Route::get('/siswa/{nama_siswa?}', function ($nama_siswa) {
    return view('siswa',['nama_siswa'=>$nama_siswa]);
});
Route::view('/about','about',[
    'nama'=>'RONI',
    'alamat'=>'Aceh'
]);

