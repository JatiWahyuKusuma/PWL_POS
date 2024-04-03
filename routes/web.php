<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', [WelcomeController::class, 'index']);

route::get('/level', [LevelController::class, 'index']);
route::get('/kategori', [KategoriController::class, 'index']);
route::get('/user', [UserController::class, 'index']);
route::get('/user/tambah', [UserController::class, 'tambah']);
route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
route::get('/kategori', [KategoriController::class, 'index']);
route::get('/kategori/create', [KategoriController::class, 'create']);
route::post('/kategori', [KategoriController::class, 'store']);



route::group(['prefix' => 'user'], function (){
    route::get('/', [UserController::class, 'index']); //menampilkan halaman User
    route::post('/list', [UserController::class, 'list']); //menampilkan data user dalam bentuk json untuk datatable
    route::get('/create', [UserController::class, 'create']); //menampilkan halaman form tambah user
    route::post('/', [UserController::class, 'store']); //menambahkan data user baru
    route::get('/{id}', [UserController::class, 'show']); //menampilkan detail user
    route::get('/{id}/edit', [UserController::class, 'edit']);//menampilkan form edit user 
    route::put('/{id}', [UserController::class, 'update']); //menyimpan perubahan data user
    route::delete('/{id}', [UserController::class, 'destroy']);  //menghapus data user
});

