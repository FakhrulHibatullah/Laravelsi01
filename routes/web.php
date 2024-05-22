<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berati meangambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
route::get('/admin', [AdminController::class, 'index']);
route::get('/pegawai', [PegawaiController::class, 'index']);
