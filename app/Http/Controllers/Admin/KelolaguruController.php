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
        $guru = DB::table('guru')->get();
        return view ('admin.kelolaguru',['guru' =>$guru]);
    }

    public function editview($id){
        $guru = DB::table('guru')->where('id', $id)->get();
        return view ('admin.editkelolaguru',['guru' =>$guru]);
    }
    public function edit(Request $request){
        DB::table('guru')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'mapel' => $request->mapel
        ]);
        return redirect('/admin/kelolaguru');
    }

    // tambah guru
    public function tambahguru(){
        return view ('admin.tambahguru');
    }

    public function store(Request $request){
        $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('teacher');
        return redirect ('admin/kelolaguru');
    }
}
