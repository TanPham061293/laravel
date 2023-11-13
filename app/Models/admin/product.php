<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='product_list';
    protected $fillable =['tenkhongdauvi','hienthi','stt','tenvi','motavi','file','ngaytao'];
    public $timestamps = false;
    protected $attributes =[
       'ngaysua' => 0,
       'noibat' => 0,
       'hot' => 0,
       'type' => 'san-pham'
    ];
}
