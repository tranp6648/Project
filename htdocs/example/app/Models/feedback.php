<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    protected $table='feeback';
    protected $filltable=['ID_monhoc','ID_student','content','status'];
    public $timestamps=false;
}
