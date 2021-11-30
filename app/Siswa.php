<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Siswa extends Model
{
    use SoftDeletes;
    protected $table = "students";
    protected $dates = ['deleted_at'];
}
