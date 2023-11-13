<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\userAdmin;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\NewletersController;
use App\Http\Controllers\admin\products\ProductListController;
use App\Http\Controllers\admin\products\ProductDetailController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\StaticController;
use App\Http\Controllers\admin\PhotoController;
use App\Http\Controllers\admin\SeopageController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\client\ProductsController;
use App\Http\Controllers\client\IntroduceController;
use App\Http\Controllers\client\HomeClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('', function(){
//     return redirect(route('client.home'));
// });

Route::get('admin/login', [userAdmin::class, 'loginAdmin'])->name('login');
Route::post('admin/login', [userAdmin::class, 'postloginAdmin'])->name('postlogin');
Route::get('admin/logout', [userAdmin::class, 'postlogoutAdmin'])->name('logout');

Route::middleware([CheckLogin::class])->group(function () {

    Route::get('admin/index', [HomeController::class, 'index']);

    Route::get('admin/product/list', [ProductListController::class, 'get_lists'])->name('getlist');
    Route::post('admin/product/list', [ProductListController::class, 'ajaxStatus'])->name('ajaxlistStatus');
    Route::get('admin/product/addlist', [ProductListController::class, 'addListProduct'])->name('addlist');
    Route::post('admin/product/addlist', [ProductListController::class, 'saveListProduct'])->name('postlist');
    Route::get('admin/product/editlist', [ProductListController::class, 'editListProduct'])->name('editlist');
    Route::get('admin/product/deletelist', [ProductListController::class, 'deleteListProduct'])->name('deletelist');

    Route::get('admin/product/Items', [ProductDetailController::class, 'get_items'])->name('getitems');
    Route::post('admin/product/Items', [ProductDetailController::class, 'ajaxStatus'])->name('ajaxStatus');
    Route::get('admin/product/addItem', [ProductDetailController::class, 'addItemProduct'])->name('additem');
    Route::post('admin/product/addItem', [ProductDetailController::class, 'saveItemProduct'])->name('postitem');
    Route::get('admin/product/editItem', [ProductDetailController::class, 'editItemProduct'])->name('edititem');
    Route::get('admin/product/deleteItem', [ProductDetailController::class, 'deleteItemProduct'])->name('deleteitem');

    Route::get('admin/news', [NewsController::class, 'requickNews']);

    Route::get('admin/order', [OrderController::class, 'requickOrder']);

    Route::get('admin/newsletter', [NewletersController::class, 'requickNewsletter']);

    Route::get('admin/static', [StaticController::class, 'editItemStatic'])->name('updateStatic');
    Route::post('admin/static', [StaticController::class, 'saveStatic'])->name('saveStatic');

    Route::get('admin/photos', [PhotoController::class, 'get_lists'])->name('getlistPhoto');
    Route::post('admin/photos', [PhotoController::class, 'ajaxStatus'])->name('ajaxStatusPhoto');
    Route::get('admin/addphoto', [PhotoController::class, 'addItem'])->name('addPhoto');
    Route::get('admin/editphoto', [PhotoController::class, 'editItemPhoto'])->name('editPhoto');
    Route::get('admin/edit-photo', [PhotoController::class, 'editPhoto'])->name('editPhoto2');
    Route::post('admin/addphoto', [PhotoController::class, 'savePhoto'])->name('savePhoto');
    Route::get('admin/deletephoto', [PhotoController::class, 'deleteItemPhoto'])->name('deletePhoto');
    // Route::get('admin/photo', [PhotoController::class, 'editListProduct'])->name('editPhoto');

    Route::get('admin/seopage', [SeopageController::class, 'requickSeopage']);

    Route::get('admin/setting', [SettingController::class, 'requickSetting']);
});
Route::get('/trang-chu',[HomeClientController::class,'showHome'])->name('client.home');
Route::post('/trang-chu',[HomeClientController::class,'registerNewletter'])->name('register.new');


Route::get('/san-pham',[ProductsController::class,'showProducts'])->name('client.product');
Route::get('/san-pham/item/{name}',[ProductsController::class,'showDetailProduct'])->name('client.product.detail');
Route::get('/san-pham/list/{name}',[ProductsController::class,'showlistItems'])->name('client.product.list');

Route::get('/gioi-thieu',[IntroduceController::class,'showIntroduce'])->name('client.introduce');