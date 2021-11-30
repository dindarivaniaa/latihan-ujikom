<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use Illuminate\Support\Facades\Hash;

class KelolasiswaController extends Controller
{
    public function index(){
        $null= NULL;
        $data = DB::table('students')
        ->join('users', 'nomor', '=', 'students.NIS')
        ->where('students.deleted_at', '=', $null)
        ->get();
        return view ('admin.kelolasiswa',compact('data'));
    }

      // tambah siswa
      public function tambahsiswa(){
        return view ('admin.tambahsiswa');
    }

     // tambah siswa2
     public function tambahsiswa2(){
        return view ('admin.tambahsiswa2');
    }

    public function addsiswa(Request $request){
        DB::table('students')->insert([
            'NIS' => $request['NIS'],
            'gender' => $request['gender'],
            'TTL' => $request['TTL'],
            'agama' => $request['agama']
        ]);
        return redirect ('admin/kelolasiswa');
    }

    public function hapus($nomor)
    {
        // Guru::findOrFail($id)->delete();
        // $guru = Guru::where('id',$id)->firstOrFail();
        // // $guru = Guru::find($id);
        // $guru->delete();
        // $guru = Guru::find($id);
        $siswa = Siswa::where('NIS',$nomor)->firstOrFail();
        // $guru = Guru::find($nomor)->firstOrFail();
    	$siswa->delete();
        return redirect('/admin/kelolasiswa');
    }


    public function store(Request $request){
        $user= User::create([
            'nomor' => $request['nomor'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('student');
        return redirect ('admin/kelolasiswa');
    }
}
