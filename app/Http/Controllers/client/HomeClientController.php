<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Statics;
use App\Models\admin\Product;
use App\Models\admin\Photo;
use App\Http\Requests\admin\ValidateForm;
use App\Models\client\HomeNewLetter;

class HomeClientController extends Controller
{
    //
    public function showHome()
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
        $item_list_nb = Product::where('type','san-pham')->where('hienthi','>',0)->where('noibat','>',0)->get();
        
        return view('client.templates.index.index', compact('introduce', 'footer','slider','favicon','logo','item_list_nb','list_menu_nb'));
    }
    public function registerNewletter(Request $req)
    {
       
    //     $vali = $req->validate([
    //         //
    //         'username' => 'required|min:5',
    //         'password' =>'required',
    //         'fullname' => 'required|min:5',
    //         'phone' => 'required|numeric',
    //         'emailNewsLetter' => 'required|email',
    //     ],[
    //         //
    //         'username.required' => 'Chưa nhập :attribute .',
    //         'username.min' => ':attribute độ dài tối thiểu 5 ký tự.',
    //         'password.required' => 'Chưa nhập :attribute.',
    //         'fullname.required' => 'Chưa nhập họ tên.',
    //         'phone.required' => 'Chưa nhập số điện thoại.',
    //         'emailNewsLetter.required' => 'Chưa nhập email.',
    //         'phone.numberic' => 'Dữ liệu nhập phải là số.',
    //         'emailNewsLetter.email' => 'Không phải email hợp lệ.'
    //     ]
    // );
        // dd($req->input());
        $register = new HomeNewLetter;
        $register->ten = $req->fullname;
        $register->dienthoai = $req->phone;
        $register->email = $req->fullname;
        $register->type = 'dangkynhantin';
        $register->noidung = ($req->noidung != null) ? $req->noidung : '';
        $register->save();
        return view('client.templates.layout.transfer',['notice'=>'Cảm nhận đã được gửi!']);
    }
}
