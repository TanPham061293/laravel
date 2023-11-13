<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table ='product';
    public $timestamps = false;
    protected $fillable = ["tenkhongdauvi","tenvi", "motavi" ,"noidungvi", "hienthi", "stt","masp","gia", "giamoi","giakm"] ;
    protected $attributes = [
        'type' => 'san-pham',
        'gia' =>0,
        'giamoi' =>0,
        'giakm' =>0,
    ];
}
