<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Statics;
use App\Models\admin\Photo;
use App\Models\admin\Product;

class IntroduceController extends Controller
{
    //
    public function showIntroduce()
    {
        $list_menu_nb = Product::where('type', 'san-pham')->where(function ($query) {
            $query->where('hienthi', '>', 0);
            $query->where('noibat', '>', 0);
        })->get();
        $introduce = Statics::where('type', 'gioi-thieu')->first();
        $footer = Statics::where('type', 'footer')->first();
        $slider = Photo::where('type','slide')->where('hienthi','>',0)->get();
        $favicon = Photo::where('type','favicon')->where('hienthi','>',0)->first();
        $logo = Photo::where('type','logo')->where('hienthi','>',0)->first();
        
        return view('client.templates.static.static', compact('introduce', 'footer','slider','favicon','logo','list_menu_nb'));
    }
    public function ajaxProduct(Request $req)
    {
        return response()->json('aaaaa');
    }
}
