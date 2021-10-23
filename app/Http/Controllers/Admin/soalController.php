<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class soalController extends Controller
{
    public function soal()
    {
        return view ('admin.soal');
    }
}
