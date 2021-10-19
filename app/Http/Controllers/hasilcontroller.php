<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hasilcontroller extends Controller
{
    public function hasil()
    {
        return view ('fitur.hasil');
    }
}
