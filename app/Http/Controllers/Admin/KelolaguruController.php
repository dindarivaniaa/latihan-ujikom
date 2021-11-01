<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



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
}
