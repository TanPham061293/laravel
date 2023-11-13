<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Product;
use App\Models\admin\Detail;
use App\Models\admin\Photo;
use App\Models\admin\Statics;


class ProductsController extends Controller
{
    //
    public function showProducts()
    {
        $list_menu_nb = Product::where('type', 'san-pham')->where(function ($query) {
            $query->where('hienthi', '>', 0);
            $query->where('noibat', '>', 0);
        })->get();
        $items = Detail::where('type', 'san-pham')->where('hienthi', '>', 0)->get();
        $footer = Statics::where('type', 'footer')->first();
        $slider = Photo::where('type', 'slide')->where('hienthi', '>', 0)->get();
        $favicon = Photo::where('type', 'favicon')->where('hienthi', '>', 0)->first();
        $logo = Photo::where('type', 'logo')->where('hienthi', '>', 0)->first();

        return view('client.templates.product.products', compact('list_menu_nb', 'items', 'slider', 'favicon', 'logo', 'footer'));
    }
    public function showlistItems(Request $req)
    {
        $list_menu_nb = Product::where('type', 'san-pham')->where(function ($query) {
            $query->where('hienthi', '>', 0);
            $query->where('noibat', '>', 0);
        })->get();
        $footer = Statics::where('type', 'footer')->first();
        $slider = Photo::where('type', 'slide')->where('hienthi', '>', 0)->get();
        $favicon = Photo::where('type', 'favicon')->where('hienthi', '>', 0)->first();
        $logo = Photo::where('type', 'logo')->where('hienthi', '>', 0)->first();
        $path = explode('/',$req->path()) ;
        $query = end($path);

        $find_item = Product::where('tenkhongdauvi',$query)->first();
        
        if($find_item){
            
            $items = Detail::where('type', 'san-pham')->where('hienthi', '>', 0)->where('id_list',$find_item->id)->get();
           
        }
        return view('client.templates.product.products_list', compact('find_item', 'items', 'slider', 'favicon', 'logo', 'footer','list_menu_nb'));
    }
    public function ajaxProduct(Request $req)
    {
        return response()->json('aaaaa');
    }
    public function showDetailProduct(Request $req)
    {
        $list_menu_nb = Product::where('type', 'san-pham')->where(function ($query) {
            $query->where('hienthi', '>', 0);
            $query->where('noibat', '>', 0);
        })->get();
        $slug = explode('/',$req->path());
        $slug = end($slug);
        $item = Detail::where('tenkhongdauvi',$slug)->first();
        $related_prd = Detail::where('id_list',$item->id_list)->where('id','<>',$item->id)->get();
        $footer = Statics::where('type', 'footer')->first();
        $slider = Photo::where('type', 'slide')->where('hienthi', '>', 0)->get();
        $favicon = Photo::where('type', 'favicon')->where('hienthi', '>', 0)->first();
        $logo = Photo::where('type', 'logo')->where('hienthi', '>', 0)->first();
        return view('client.templates.product.product_detail', compact('item','related_prd','slider', 'favicon', 'logo', 'footer','list_menu_nb'));
    }
}
