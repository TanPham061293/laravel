<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client\HomeNewLetter;
use Illuminate\Support\Facades\DB;

class NewletersController extends Controller
{
    //
    public function showNewLetter()
    {
        $type = $_GET['type'];
        $items = HomeNewLetter::where('type',$type)->orderByDesc('id')->paginate(10);
        return view('admin.templates.newsletter.man.newletter',compact('type','items'));
    }
}
