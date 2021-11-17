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
                ->join('users', 'users.id', '=', 'teachers.users_id')
                ->get();
        return view ('admin.kelolaguru',compact('data'));
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
