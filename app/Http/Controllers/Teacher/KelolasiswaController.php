<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelolasiswaController extends Controller
{
    public function index(){
        $siswa = DB::table('siswa')->get();
        return view ('teacher.kelolasiswa',['siswa' =>$siswa]);
    }
    public function editview($id){
        $siswa = DB::table('siswa')->where('id', $id)->get();
        return view ('teacher.editkelolasiswa',['siswa' =>$siswa]);
    }
    public function edit(Request $request){
        DB::table('siswa')->where('id',$request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama
        ]);
        return redirect('/teacher/kelolasiswa');
    }
}
