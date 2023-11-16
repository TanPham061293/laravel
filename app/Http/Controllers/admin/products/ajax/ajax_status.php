<?php
	// include "ajax_config.php";

	// if(isset($_POST['id']))
	// {
	// 	$table = (isset($_POST['table'])) ? htmlspecialchars($_POST['table']) : '';
	// 	$id = (isset($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;
	// 	$loai = (isset($_POST['loai'])) ? htmlspecialchars($_POST['loai']) : '';

	// 	$tmp = $d->rawQueryOne("select $loai from #_$table where id = ? limit 0,1",array($id));

	// 	if($tmp[$loai]>0) $data[$loai] = 0;
	// 	else $data[$loai] = 1;

	// 	$d->where('id',$id);
	// 	$d->update($table,$data);
	// 	$cache->DeleteCache();
	// }
	namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\ValidateProduct;
use App\Models\admin\Product;
use Illuminate\Support\Facades\DB;

	$iteitem = Product::find(39);
	echo 'aaaaa';
	echo '<pre>';
	print_r($iteitem);
	echo '</pre>';
?>