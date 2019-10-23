<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    //
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table ='capacitaciones';
}
