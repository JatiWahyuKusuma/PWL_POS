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

