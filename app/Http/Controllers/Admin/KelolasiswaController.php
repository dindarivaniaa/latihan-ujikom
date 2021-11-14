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
        $siswa = DB::table('siswa')->get();
        return view ('admin.kelolasiswa',['siswa' =>$siswa]);
    }
    public function editview($id){
        $siswa = DB::table('siswa')->where('id', $id)->get();
        return view ('admin.editkelolasiswa',['siswa' =>$siswa]);
    }
    public function edit(Request $request){
        DB::table('siswa')->where('id',$request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama
        ]);
        return redirect('/admin/kelolasiswa');
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
