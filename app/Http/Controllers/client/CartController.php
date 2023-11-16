<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\admin\Detail;
use Illuminate\Http\Request;
use App\Models\admin\Statics;
use App\Models\admin\Product;
use App\Models\admin\Photo;
use Illuminate\Support\Str;
use App\Models\client\cart\Order;
use App\Models\client\cart\OrderDetail;



class CartController extends Controller
{
    //
    protected $template = 'client/templates/';
    protected $footer;
    protected $slider;
    protected $favicon;
    protected $logo;

    public function __construct()
    {
        $this->footer = Statics::where('type', 'footer')->first();
        $this->slider = Photo::where('type', 'slide')->where('hienthi', '>', 0)->get();
        $this->favicon = Photo::where('type', 'favicon')->where('hienthi', '>', 0)->first();
        $this->logo = Photo::where('type', 'logo')->where('hienthi', '>', 0)->first();
    }
    public function byNow(Request $req)
    {
        $id = $req->id;
        $qty = $req->qty;
        if (isset($id)) {
            $item = Detail::find($id);
            return view($this->template . 'order/order', [
                'footer' => $this->footer,
                'favicon' => $this->favicon,
                'slider' => $this->slider,
                'logo' => $this->logo,
                'item' => $item,
                'qty' => $qty,
            ]);
        }

        return view($this->template . '404/404');
    }
    public function byCart(Request $req)
    {
        $cart = session('cart');
        //dd($cart);
        $items = array();
        foreach ($cart as $v) {
            $items[] = Detail::find($v['productid']);
        }

        return view($this->template . 'order/orders', [
            'footer' => $this->footer,
            'favicon' => $this->favicon,
            'slider' => $this->slider,
            'logo' => $this->logo,
            'items' => $items,
            'cart' => $cart,
        ]);
    }
    public function changeCart(Request $req)
    {
        if (isset($req->href)) {
            $id = Str::between($req->href, '?id=', '&');
            $item = Detail::find($id);
            $qty = $req->qty;
            $gia = ($item->giamoi != 0) ? $item->giamoi : $item->gia;
            $thanhtien = number_format($qty * $gia);
            return response()->json($thanhtien);
        }
        $id = $req->id;
        $qty = $req->qty;
        $cart = $req->session()->get('cart');
        $max = count($cart);
        for ($i = 0; $i < $max; $i++) {
            if ($id == $cart[$i]['productid']) {
                $cart[$i]['qty'] = $qty;
            }
        }
        session(['cart' => $cart]);
        return response()->json($cart);
    }
    public function sendOrder(Request $req)
    {
        $id = $req->id;
        $data_donhang = new Order;
        $data_donhang->madonhang = $this->stringRandom(6);
        $data_donhang->hoten = $req->ten;
        $data_donhang->dienthoai = $req->dienthoai;
        $data_donhang->diachi = $req->diachi;
        $data_donhang->email = $req->email;
        //$data_donha->tamtinh'] = $tamtinh;
        //$data_donha->ng['tonggia'] = $total;
        $data_donhang->yeucaukhac = $req->ghichu;
        $data_donhang->ngaytao = time();
        $data_donhang->tinhtrang = 1;
        $data_donhang->stt = 1;
        $last_id = $data_donhang->save();
        if ($last_id) {
            if ($id) {
                $item = Detail::find($id);
                $detail_order = new OrderDetail;
                $detail_order->id_product = $item->id;
                $detail_order->id_order = $data_donhang->id;
                $detail_order->photo = $item->photo;
                $detail_order->ten = $item->tenvi;
                $detail_order->gia = $item->gia;
                $detail_order->giamoi = $item->giamoi;
                $detail_order->soluong = $req->qty;
                $detail_order->save();
                // $cart = session('cart');
                // foreach ($cart as $v) {
                //     if ($id == $v['productid']) {
                //         unset($v);
                //     }
                // }
            } else {
                $cart = session('cart');
                foreach ($cart as $v) {
                    $item = Detail::find($v['productid']);
                    $detail_order = new OrderDetail;
                    $detail_order->id_product = $item->id;
                    $detail_order->id_order = $data_donhang->id;
                    $detail_order->photo = $item->photo;
                    $detail_order->ten = $item->tenvi;
                    $detail_order->gia = $item->gia;
                    $detail_order->giamoi = $item->giamoi;
                    $detail_order->soluong = $v['qty'];
                    $detail_order->save();
                }
                
            }
        }
        return redirect()->back()->with('success', 'Gửi đơn hàng thành công!');
    }
    public function addCart(Request $req)
    {
        $id = $req->id;
        $qty = $req->qty;
        if (isset($id)) {
            if ($req->session()->has('cart')) {
                $cart = $req->session()->get('cart');
                $max = count($cart);
                $check = false;
                for ($i = 0; $i < $max; $i++) {
                    if ($id == $cart[$i]['productid']) {
                        $cart[$i]['qty'] += $qty;
                        $check = true;
                        break;
                    }
                }
                if ($check == false) {
                    $cart[$max]['productid'] = $id;
                    $cart[$max]['qty'] = $qty;
                }
            } else {
                $cart = array();
                $cart[0]['productid'] = $id;
                $cart[0]['qty'] = $qty;
            }
        }

        session(['cart' => $cart]);
        return response()->json('Sản phẩm đã được thêm vào giỏ hàng của bạn.');
    }
    public function deleteCart(Request $req)
    {
        if ($req->ajax()) {
            $id = $req->id;
            $cart = session('cart');
            $max = count($cart);
            $cart_2 = array();
            $j = 0;
            for ($i = 0; $i < $max; $i++) {
                if ($id == $cart[$i]['productid']) {
                    unset($cart[$i]);
                } else {
                    $cart_2[$j] = $cart[$i];
                    $j++;
                }
            }
        }
        $req->session()->forget('cart');
        session(['cart' => $cart_2]);
        return response()->json('Xoá thành công sản phẩm khỏi giỏ hàng.');
    }
    public function viewCart(Request $req)
    {
        if (!$req->session()->has('cart')) {
            return view($this->template . 'order/viewCart', [
                'footer' => $this->footer,
                'favicon' => $this->favicon,
                'slider' => $this->slider,
                'logo' => $this->logo,
            ]);
        }
        $cart = session('cart');
        //dd($cart);
        $items = array();
        foreach ($cart as $v) {
            $items[] = Detail::find($v['productid']);
        }

        return view($this->template . 'order/viewCart', [
            'footer' => $this->footer,
            'favicon' => $this->favicon,
            'slider' => $this->slider,
            'logo' => $this->logo,
            'items' => $items,
            'cart' => $cart,
        ]);
    }

    private function stringRandom($sokytu = 10)
    {
        $str = '';

        if ($sokytu > 0) {
            $chuoi = 'ABCDEFGHIJKLMNOPQRSTUVWXYZWabcdefghijklmnopqrstuvwxyzw0123456789';
            for ($i = 0; $i < $sokytu; $i++) {
                $vitri = mt_rand(0, strlen($chuoi));
                $str = $str . substr($chuoi, $vitri, 1);
            }
        }

        return $str;
    }
}
