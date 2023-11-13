<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statics extends Model
{
    use HasFactory;
    protected $table ='static';
    public $timestamps =false;
}
