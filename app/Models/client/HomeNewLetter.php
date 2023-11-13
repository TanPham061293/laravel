<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeNewLetter extends Model
{
    use HasFactory;
    protected $table ='newsletter';
    public $timestamps = false;
}
