<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class KelolasiswaController extends Controller
{
    public function index(){
        return view ('admin.kelolasiswa');
    }
}
