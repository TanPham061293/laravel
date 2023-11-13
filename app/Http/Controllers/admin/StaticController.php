<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Statics;
use App\Http\Requests\admin\ValidateProduct;
use Intervention\Image\ImageManagerStatic as Image;

class StaticController extends Controller
{
    //
    protected $template = 'admin/templates/';


    public function editItemStatic(Request $req)
    {
        $type = $req->query('type');
        $item = Statics::where('type', $type)->first();
        return view($this->template . 'static/man/itemadd', compact('type', 'item'));
    }

    public function saveStatic(ValidateProduct $requset)
    {

        //$requset->validated();
        $type = $_GET['type'];
        $dataUpdate = array();
        $dataUpdate = [
            'hienthi' => ($requset->hienthi == 'on' ? '1' : '0'),
            'tenvi' => $requset->tenvi,
            'ngaysua' => time(),
        ];
        $dataUpdate['noidungvi'] = $requset->noidungvi;
        $dataUpdate['motavi'] = $requset->motavi;
        if ($requset->hasFile('file')) {
            $file = $requset->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            
            $dataUpdate['photo'] = $fileName;
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(490, 260);
            $image_resize->save('uploads/thumbs' . $fileName);
            $file->move('uploads/static', $fileName);
        }
        if ($requset->hasFile('file-taptin')) {
            $file = $requset->file('file-taptin');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('uploads/static/file', $fileName);
            $dataUpdate['taptin'] = $fileName;
        }
        $flafCheck = Statics::where('type', $type)->update($dataUpdate);
        if ($flafCheck) {
            return redirect(route('updateStatic', compact('type')))->with('success', 'Cập nhật dữ liệu thành công.');
        } else {
            return redirect(route('updateStatic', compact('type')))->with('error', 'Cập nhật dữ liệu thất baị.');
        }
    }
}
