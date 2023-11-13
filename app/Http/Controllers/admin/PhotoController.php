<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Photo;
use App\Http\Requests\admin\ValidateProduct;

class PhotoController extends Controller
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
		
		$type = $req->query('type');
		$items = Photo::where('type', $type)->orderByDesc('id')->paginate(7);
		$success = $req->success;
		$error = $req->error;
		return view($this->template . 'photo/man/photos', compact('items', 'type', 'success', 'error'));
	}


	public function ajaxStatus(Request $req)
	{
		if ($req->ajax()) {
			$id = $req->id;
			$loai = $req->loai;
			if ($id) {
				$item = Photo::find($id);
				if ($item->$loai == 0) {
					$status = 1;
				} else {
					$status = 0;
				}
			}
			$dataUpdate = [
				$loai => $status,
			];
			Photo::where('id', $id)->update($dataUpdate);
			// return response()->json($req->id);
		}
	}
	public function addItem(Request $req)
	{
		$type = $req->query('type');
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		return view($this->template . 'photo/man/photo_add', compact('page','type'));
	}
	public function editItemPhoto(Request $req)
	{
		$type = $req->query('type');
		$item = Photo::find($req->id);
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		return view($this->template . 'photo/man/photo_add', compact('item', 'page','type'));
	}
	public function editPhoto(Request $req)
	{
		$type = $req->query('type');
		
		$item = Photo::where('type',$type)->first();
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		return view($this->template . 'photo/static/photostatic', compact('item', 'page','type'));
	}
	public function savePhoto(ValidateProduct $requset)
	{
		$requset->validated();
		$idedit =  $_GET['id'];
		$page = $_GET['page'];
		$type = $_GET['type'];
		$dataUpdate = array();
		$addList = new Photo;
		if ($requset->hasFile('file')) {
			$file = $requset->file('file');
			$fileName = time() . '-' . $file->getClientOriginalName();
			$file->move('uploads', $fileName);
			$addList->photo = $fileName;
		}
		if ($idedit != 0) {
			$dataUpdate = [
				'hienthi' => ($requset->hienthi == 'on' ? '1' : '0'),
				'stt' => $requset->stt,
				'tenvi' => $requset->tenvi,
				'ngaysua' => time(),
			];
			if ($requset->hasFile('file')) {
				$dataUpdate['photo'] = $fileName;
			}
			$flafCheck = Photo::where('id', $idedit)->where('type',$type)->update($dataUpdate);
			if ($flafCheck) {
				if($type != 'slide'){
					return redirect(route('editPhoto2', compact('type')))->with('success', 'Cập nhật dữ liệu thành công.');
				}else{
					return redirect(route('getlistPhoto', compact('type','page')))->with('success', 'Cập nhật dữ liệu thành công.');
				}
				
			} else {
				return redirect(route('getlistPhoto'))->with('error', 'Cập nhật dữ liệu thất baị.');
			}
		} else {
			$addList->hienthi = ($requset->hienthi == 'on' ? '1' : '0');
			$addList->stt = $requset->stt;
			$addList->tenvi = $requset->tenvi;
			$addList->type = $type;
			$addList->ngaytao = time();
			$flafCheck = $addList->save();
			if ($flafCheck) {
				return redirect(route('getlistPhoto',compact('type')))->with('success', 'Thêm dữ liệu thành công.');
			} else {
				return redirect(route('getlistPhoto'))->with('error', 'Thêm dữ liệu không thành công.');
			}
		}
	}

	public function deleteItemPhoto(Request $req)
	{
		$error = '';
		$success = '';
		$page = $_GET['page'];
		$type = $_GET['type'];
		$demError = '';
		if (isset($_GET['listid'])) {
			$arrId = explode(',', $_GET['listid']);
			for ($i = 0; $i < count($arrId); $i++) {
				$datafind = Photo::find($arrId[$i]);
				if ($datafind) {
					if ($flag = Photo::where('id', $arrId[$i])->delete()) {
						$dem = 0;
					}
				} else {
					$demError .= ',' . $arrId[$i];
				}
			}
			if ($demError != '') {
				return redirect(route('getlistPhoto', compact('type','page')))->with('error', 'Xoá không thành xông: ' . $demError);
			} else {
				return redirect(route('getlistPhoto', compact('type','page')))->with('success', 'Xoá thành công danh muc.');
			}
		} else {
			$datafind = Photo::find($req->id);
			if ($datafind) {
				if ($flag = Photo::where('id', $req->id)->delete()) {
					return redirect(route('getlistPhoto', compact('type','page')))->with('success', 'Xoá thành công danh muc: ' . $datafind->tenvi);
				}
			} else {
				return redirect(route('getlistPhoto', compact('type','page')))->with('error', 'Không tìm thấy danh mục: ' . $datafind->tenvi);
			}
		}
	}
}
