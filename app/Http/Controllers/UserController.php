<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index(){

    $user = UserModel::all();
    return view('user', ['data' => $user]);
    // $user = UserModel::create(
    //     [
    //         'username' => 'manager11',
    //         'nama' => 'Manager11',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );
    // $user->username ='manager12';

    
    // $user->save();

    // $user->wasChanged();//true
    // $user->wasChanged('username');//true
    // $user->wasChanged(['username', 'level_id']);//false
    // $user->wasChanged('nama');//true
    // dd($user->wasChanged(['nama', 'username']));//true

    // $user->isClean();//false
    // $user->isClean('username');//false
    // $user->isClean('nama');//true
    // $user->isClean(['nama', 'username']);//false


    //  $user->isDirty();//false
    //  $user->isClean();//true
    //  dd($user->isDirty());
    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager33',
    //         'nama' => 'Manager Tiga Tiga',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );
    // $user->save();
    
    // dd($user);
    //tambah data user dengan Eloquent Model
    // $data = [
    //     'level_id' => 2,
    //     'username' => 'manager_tiga',
    //     'nama'     => 'Manager 3',
    //     'password' => Hash::make('12345'),     
    // ];
    // UserModel::create($data); //tambahkkan data ke tabel m_user

    // $user = UserModel::firstWhere('level_id', 1); //ambil semua data dari tabel m_user
    // return view('user', ['data' => $user]);
   }

   public function tambah(){
    return view('user_tambah');
   }

   public function tambah_simpan(Request $request){
    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make('$request->password'),
        'level_id' => $request->level_id

    ]);

    return redirect(('/user'));
   }

   public function ubah($id){
    $user = UserModel::find($id);
    return view('user_ubah', ['data' => $user]);
   }

   public function ubah_simpan($id, Request $request){

    $user = UserModel::find($id);

    $user->username = $request->username;
    $user->nama = $request->nama;
    $user->password = Hash::make('$request->password');
    $user->level_id = $request->level_id;

    $user->save();
    return redirect('/user');
   }

   public function hapus($id){
    $user = UserModel::find($id);
    $user->delete();
    
    return redirect('/user');
   }
}
