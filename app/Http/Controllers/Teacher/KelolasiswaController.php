<?php

namespace App\Http\Controllers\Teacher;

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
        return view ('teacher.kelolasiswa',compact('data'));
    }


     //  tambah siswa
     public function tambahsiswa(){
        return view ('teacher.tambahsiswa');
    }

    public function store(Request $request){
        $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('student');
        return redirect ('teacher/kelolasiswa');
    }
}
