<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Detail;
use App\Models\admin\Product;
use App\Http\Requests\admin\ValidateProduct;
use Intervention\Image\ImageManagerStatic as Image;



class ProductDetailController extends Controller
{
    //
    protected $template = 'admin/templates/';


    public function get_items(Request $req)
    {
        // if(isset($_REQUEST['keyword']))
        // {
        // 	$keyword = htmlspecialchars($_REQUEST['keyword']);
        // 	$where .= " and (tenvi LIKE '%$keyword%' or tenen LIKE '%$keyword%')";
        // }
        //dd($req->all());
        $type = 'san-pham';
        $success = $req->success;
        $error = $req->error;
        $category = Product::where('type', 'san-pham')->get();
        if (isset($req->id_list)) {
            $id_list = $req->id_list;
            if ($id_list != 0) {
                $items = Detail::select('product.*', 'product_list.tenvi as tenlist')->leftJoin('product_list', 'product.id_list', '=', 'product_list.id')->where('product.type', '=', 'san-pham')->where('product.id_list', $id_list)->orderByDesc('id')->paginate(7);
                return view($this->template . 'product/man/items', compact('items', 'type', 'success', 'error', 'category', 'id_list'));
            } else {
                $items = Detail::select('product.*', 'product_list.tenvi as tenlist')->leftJoin('product_list', 'product.id_list', '=', 'product_list.id')->where('product.type', '=', 'san-pham')->orderByDesc('id')->paginate(7);
                return view($this->template . 'product/man/items', compact('items', 'type', 'success', 'error', 'category', 'id_list'));
            }
        }
        $items = Detail::select('product.*', 'product_list.tenvi as tenlist')->leftJoin('product_list', 'product.id_list', '=', 'product_list.id')->where('product.type', '=', 'san-pham')->orderByDesc('id')->paginate(7);

        return view($this->template . 'product/man/items', compact('items', 'type', 'success', 'error', 'category'));
    }
    public function ajaxStatus(Request $req)
    {
        if ($req->ajax()) {
            $id = $req->id;
            $loai = $req->loai;
            if ($id) {
                $item = Detail::find($id);
                if ($item->$loai == 0) {
                    $status = 1;
                } else {
                    $status = 0;
                }
            }
            $dataUpdate = [
                $loai => $status,
            ];
            Detail::where('id', $id)->update($dataUpdate);
        }
    }
    public function addItemProduct()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $selectdm = Product::where('type', 'san-pham')->get();
        return view($this->template . 'product/man/item_add', compact('page', 'selectdm'));
    }
    public function editItemProduct(Request $req)
    {

        $item = Detail::find($req->id);
        $selectdm = Product::where('type', 'san-pham')->get();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        return view($this->template . 'product/man/item_add', compact('item', 'page', 'selectdm'));
    }
    public function saveItemProduct(ValidateProduct $requset)
    {
        $idedit = $_GET['id'];
        $page = $_GET['page'];
        //$vali = $requset->validated();
        $vali = $requset->validate([
            'tenvi' => 'required',
            'slugvi' => 'unique:product,tenkhongdauvi,' . $idedit,
            'masp' => 'unique:product,masp,' . $idedit,
        ], [
            'tenvi.required' => 'Chưa nhập tiêu đề.',
            'slugvi.unique' => 'Đường dẫn đã tồn tại. Vui lòng nhập đường dẫn mới.',
            'masp.unique' => 'Mã sản phẩm đã tồn tại. Vui lòng nhập lại.',
        ]);
        $dataUpdate = array();
        $addList = new Detail;
        if ($requset->motavi != '') {
            $addList->motavi = $requset->motavi;
            // $dataUpdate['motavi'] = $requset->motavi;
        }
        if ($requset->noidungvi != '') {
            $addList->noidungvi = $requset->noidungvi;
            // $dataUpdate['noidungvi'] = $requset->noidungvi;
        }
        if ($requset->masp != '') {
            $addList->masp = $requset->masp;
            // $dataUpdate['masp'] = $requset->masp;
        }
        if ($requset->hasFile('file')) {
            $file = $requset->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $addList->photo = $fileName;
            // $dataUpdate['photo'] = $fileName;
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(400, 400);
            $image_resize->save('uploads/thumbs/' . $fileName);
            $file->move('uploads', $fileName);
        }
        //dd($requset->input());
        if ($idedit != 0) {
            $dataUpdate = [
                'tenkhongdauvi' => $requset->slugvi,
                'hienthi' => ($requset->hienthi == 'on' ? '1' : '0'),
                'stt' => $requset->stt,
                'tenvi' => $requset->tenvi,
                'gia' => ($requset->gia != '') ? str_replace(',', '', $requset->gia) : 0,
                'giamoi' => ($requset->giamoi != '') ? str_replace(',', '', $requset->giamoi) : 0,
                'giakm' => ($requset->giakm != '') ? str_replace(',', '', $requset->giakm) : 0,
                'id_list' => $requset->id_list,
                'ngaysua' => time(),
            ];
            if ($requset->motavi != '') {
                $dataUpdate['motavi'] = $requset->motavi;
            }
            if ($requset->noidungvi != '') {
                $dataUpdate['noidungvi'] = $requset->noidungvi;
            }
            if ($requset->masp != '') {
                $dataUpdate['masp'] = $requset->masp;
            }
            if ($requset->hasFile('file')) {
                $dataUpdate['photo'] = $fileName;
            }

            $flafCheck = Detail::where('id', $idedit)->update($dataUpdate);
            if ($flafCheck) {
                return redirect(route('getitems', compact('page')))->with('success', 'Cập nhật dữ liệu thành công.');
            } else {
                return redirect(route('getitems'))->with('error', 'Cập nhật dữ liệu thất baị.');
            }
        } else {

            $addList->tenkhongdauvi = $requset->slugvi;
            $addList->hienthi = ($requset->hienthi == 'on' ? '1' : '0');
            $addList->stt = $requset->stt;
            $addList->tenvi = $requset->tenvi;
            $addList->gia = ($requset->gia != '') ? str_replace(',', '', $requset->gia) : 0;
            $addList->giamoi = ($requset->giamoi != '') ? str_replace(',', '', $requset->giamoi) : 0;
            $addList->giakm = ($requset->giakm != '') ? str_replace(',', '', $requset->giakm) : 0;
            $addList->id_list = $requset->id_list;
            $addList->ngaytao = time();
            $flafCheck = $addList->save();
            if ($flafCheck) {
                return redirect(route('getitems'))->with('success', 'Thêm dữ liệu thành công.');
            } else {
                return redirect(route('getitems'))->with('error', 'Thêm dữ liệu không thành công.');
            }
        }
    }

    public function deleteItemProduct(Request $req)
    {
        $error = '';
        $success = '';
        $page = $_GET['page'];
        $demError = '';
        if (isset($_GET['listid'])) {
            $arrId = explode(',', $_GET['listid']);
            for ($i = 0; $i < count($arrId); $i++) {
                $datafind = Detail::find($arrId[$i]);
                if ($datafind) {
                    if ($flag = Detail::where('id', $arrId[$i])->delete()) {
                        $dem = 0;
                    }
                } else {
                    $demError .= ',' . $arrId[$i];
                }
            }
            if ($demError != '') {
                return redirect(route('getitems', compact('page')))->with('error', 'Xoá không thành xông: ' . $demError);
            } else {
                return redirect(route('getitems', compact('page')))->with('success', 'Xoá thành công danh muc.');
            }
        } else {
            $datafind = Detail::find($req->id);
            if ($datafind) {
                if ($flag = Detail::where('id', $req->id)->delete()) {
                    return redirect(route('getitems', compact('page')))->with('success', 'Xoá thành công danh muc: ' . $datafind->tenvi);
                }
            } else {
                return redirect(route('getitems', compact('page')))->with('error', 'Không tìm thấy danh mục: ' . $datafind->tenvi);
            }
        }
    }
}
