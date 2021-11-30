<?php

namespace App\Http\Controllers\Admin;

use App\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\user;
use Illuminate\Support\Facades\Hash;



class KelolaguruController extends Controller
{
    public function index(){
        $null= NULL;
        $data = DB::table('teachers')
                ->join('users', 'users.nomor', '=', 'teachers.NIP')
                ->where('teachers.deleted_at', '=', $null)
                ->get();
        return view ('admin.kelolaguru',compact('data'));
    }

    public function hapus($nomor)
    {
        // Guru::findOrFail($id)->delete();
        // $guru = Guru::where('id',$id)->firstOrFail();
        // // $guru = Guru::find($id);
        // $guru->delete();
        // $guru = Guru::find($id);
        $guru = Guru::where('NIP',$nomor)->firstOrFail();
        // $guru = Guru::find($nomor)->firstOrFail();
    	$guru->delete();
        return redirect('/admin/kelolaguru');
    }

    // tambah guru
    public function tambahguru(){
        return view ('admin.tambahguru');
    }

     // tambah guru
     public function tambahguru2(){
        return view ('admin.tambahguru2');
    }

    public function addguru(Request $request){
        DB::table('teachers')->insert([
            'NIP' => $request['NIP'],
            'gender' => $request['gender'],
            'TTL' => $request['TTL'],
            'agama' => $request['agama'],
            'mapel' => $request['mapel']
        ]);
        return redirect ('admin/kelolaguru');
    }


    public function store(Request $request){
        $user= User::create([
            'nomor' => $request['nomor'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        $user->assignRole('teacher');
        return redirect ('admin/kelolaguru');
    }
}
