<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class jadwalController extends Controller
{
    public function  jadwal()
    {
        return view ('admin.jadwal');
    }
}
