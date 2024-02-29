<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index(){

    //tambah data user dengan Eloquent Model
    $data = [

        'nama' => 'Pelanggan Pertama',

        // 'username' => 'customer',
        // 'nama' => 'Pelanggan',
        // 'password' => Hash::make('12345'),
        // 'level_id' => 1

    ];
    UserModel::where('username', 'customer')->update($data); //tambahkkan data ke tabel m_user

    $user = UserModel::all(); //ambil semua data dari tabel m_user
    return view('user', ['data' => $user]);
   }
  
}
