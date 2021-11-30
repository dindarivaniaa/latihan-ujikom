<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Guru extends Model
{
    use SoftDeletes;
    protected $table = "teachers";
    protected $dates = ['deleted_at'];
}
