<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client\cart\Order;
use App\Models\client\cart\OrderDetail;

class OrderController extends Controller
{
    //
    public function showOrder(){
		$items = Order::orderByDesc('id')->paginate(10);
		($items);
       return view('admin.templates.order.man.orders',compact('items'));
    }
	public function orderDetail(Request $req){
		$id = $req->idOrder;
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$item = Order::find($id);
		$itemDetail = OrderDetail::where('id_order',$id)->get();
       return view('admin.templates.order.man.orderDetail',compact('item','itemDetail','page'));
    }
}
