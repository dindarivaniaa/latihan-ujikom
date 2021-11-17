<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use Illuminate\Support\Facades\Hash;

class KelolasiswaController extends Controller
{
    public function index(){
        $data = DB::table('students')
        ->join('users', 'users.id', '=', 'students.users_id')
        ->get();
        return view ('admin.kelolasiswa',compact('data'));
    }

      // tambah siswa
      public function tambahsiswa(){
        return view ('admin.tambahsiswa');
    }

    public function store(Request $request){
        $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('student');
        return redirect ('admin/kelolasiswa');
    }
}
