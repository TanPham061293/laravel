<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\ValidateProduct;
use App\Models\admin\Product;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ProductListController extends Controller
{
    //
    protected $template = 'admin/templates/';


    public function get_lists(Request $req)
    {
        // if(isset($_REQUEST['keyword']))
        // {
        // 	$keyword = htmlspecialchars($_REQUEST['keyword']);
        // 	$where .= " and (tenvi LIKE '%$keyword%' or tenen LIKE '%$keyword%')";
        // }
        $items = Product::where('type', 'san-pham')->orderByDesc('id')->paginate(7);
        $type = 'san-pham';
        $success = $req->success;
        $error = $req->error;
        return view($this->template . 'product/list/lists', compact('items', 'type', 'success', 'error'));
    }
    public function ajaxStatus(Request $req){
        if($req->ajax()){
            $id = $req->id;
            $loai = $req->loai;
            if($id){
                $item = Product::find($id);
                if($item->$loai == 0){
                    $status = 1;
                }else{
                    $status = 0;
                }
            }
            $dataUpdate = [
                $loai => $status,
            ];
            Product::where('id',$id)->update($dataUpdate);
            // return response()->json($req->id);
        }
    }
    public function addListProduct()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        return view($this->template . 'product/list/list_add', compact('page'));
    }
    public function editListProduct(Request $req)
    {
        $item = Product::find($req->id);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        return view($this->template . 'product/list/list_add', compact('item', 'page'));
    }
    public function saveListProduct(Request $requset)
    {
        $idedit = $_GET['id'];
        $page = $_GET['page'];
       
        //$vali = $requset->validated();
        $vali = $requset->validate([
            'tenvi'=>'required',
            'slugvi' => 'unique:product_list,tenkhongdauvi,'.$idedit,
        ],[
            'tenvi.required' =>'Chưa nhập tiêu đề.',
            'slugvi.unique' =>'Đường dẫn đã tồn tại. Vui lòng nhập đường dẫn mới.',
        ]);
        $dataUpdate = array();
        $addList = new Product;
        if ($requset->motavi != '') {
            $addList->motavi = $requset->motavi;
        }
        if ($requset->hasFile('file')) {
            $file = $requset->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('uploads', $fileName);
            $addList->photo = $fileName;
        }
        //dd($requset->input());
        if ($idedit != 0) {
            $dataUpdate = [
                'tenkhongdauvi' => $requset->slugvi,
                'hienthi' => ($requset->hienthi == 'on' ? '1' : '0'),
                'stt' => $requset->stt,
                'tenvi' => $requset->tenvi,
                'ngaysua' => time(),
            ];
            if ($requset->motavi != '') {
                $dataUpdate['motavi'] = $requset->motavi;
            }
            if ($requset->hasFile('file')) {
                $dataUpdate['photo'] = $fileName;
            }
            $flafCheck = Product::where('id', $idedit)->update($dataUpdate);
            if ($flafCheck) {
                return redirect(route('getlist', compact('page')))->with('success', 'Cập nhật dữ liệu thành công.');
            } else {
                return redirect(route('getlist'))->with('error', 'Cập nhật dữ liệu thất baị.');
            }
        } else {

            $addList->tenkhongdauvi = $requset->slugvi;
            $addList->hienthi = ($requset->hienthi == 'on' ? '1' : '0');
            $addList->stt = $requset->stt;
            $addList->tenvi = $requset->tenvi;
            $addList->ngaytao = time();
            $flafCheck = $addList->save();
            if ($flafCheck) {
                return redirect(route('getlist'))->with('success', 'Thêm dữ liệu thành công.');
            } else {
                return redirect(route('getlist'))->with('error', 'Thêm dữ liệu không thành công.');
            }
        }
    }

    public function deleteListProduct(Request $req)
    {
        $error = '';
        $success = '';
        $page = $_GET['page'];
        $demError = '';
        if (isset($_GET['listid'])) {
            $arrId = explode(',', $_GET['listid']);
            for ($i = 0; $i < count($arrId); $i++) {
                $datafind = Product::find($arrId[$i]);
                if ($datafind) {
                    if ($flag = Product::where('id', $arrId[$i])->delete()) {
                        $dem = 0;
                    }
                } else {
                    $demError .= ',' . $arrId[$i];
                }
            }
            if ($demError != '') {
                return redirect(route('getlist', compact('page')))->with('error', 'Xoá không thành xông: ' . $demError);
            } else {
                return redirect(route('getlist', compact('page')))->with('success', 'Xoá thành công danh muc.');
            }
        } else {
            $datafind = Product::find($req->id);
            if ($datafind) {
                if ($flag = Product::where('id', $req->id)->delete()) {
                    return redirect(route('getlist', compact('page')))->with('success', 'Xoá thành công danh muc: ' . $datafind->tenvi);
                }
            } else {
                return redirect(route('getlist', compact('page')))->with('error', 'Không tìm thấy danh mục: ' . $datafind->tenvi);
            }
        }
    }
}
