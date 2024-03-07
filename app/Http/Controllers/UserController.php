<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index(){

    $user = UserModel::where('username', 'manager9')-> firstOrFail;
    //tambah data user dengan Eloquent Model
    // $data = [
    //     'level_id' => 2,
    //     'username' => 'manager_tiga',
    //     'nama'     => 'Manager 3',
    //     'password' => Hash::make('12345'),     
    // ];
    // UserModel::create($data); //tambahkkan data ke tabel m_user

    // $user = UserModel::firstWhere('level_id', 1); //ambil semua data dari tabel m_user
    return view('user', ['data' => $user]);
   }
  
}
