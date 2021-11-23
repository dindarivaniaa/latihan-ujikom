<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\user;
use Illuminate\Support\Facades\Hash;



class KelolaguruController extends Controller
{
    public function index(){
        $data = DB::table('teachers')
                ->join('users', 'users.nomor', '=', 'teachers.NIP')
                ->get();
        return view ('admin.kelolaguru',compact('data'));
    }

    public function hapus($id)
    {
        Guru::findOrFail($id)->delete();
        // $guru = Guru::where('id',$id)->firstOrFail();
        // // $guru = Guru::find($id);
        // $guru->delete();
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
