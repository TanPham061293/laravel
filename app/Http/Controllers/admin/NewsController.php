<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function requickNews()
    {

        $com = (isset($_REQUEST['com'])) ? htmlspecialchars($_REQUEST['com']) : '';
        $act = (isset($_REQUEST['act'])) ? htmlspecialchars($_REQUEST['act']) : '';
        $type = (isset($_REQUEST['type'])) ? htmlspecialchars($_REQUEST['type']) : '';
        $kind = (isset($_REQUEST['kind'])) ? htmlspecialchars($_REQUEST['kind']) : '';
        $val = (isset($_REQUEST['val'])) ? htmlspecialchars($_REQUEST['val']) : '';
        $idc = (isset($_REQUEST['idc'])) ? htmlspecialchars($_REQUEST['idc']) : '';
        $id = (isset($_REQUEST['id'])) ? htmlspecialchars($_REQUEST['id']) : '';
        $curPage = (isset($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
        if (isset($kind)) $dfgallery = ($kind == 'man_list') ? 'gallery_list' : 'gallery';
        else $dfgallery = '';
        switch ($act) {

                /* Man */

            case "man":
                //get_items();
                return view('admin.templates.news.man.items');
            case "add":

                $template = "news/man/item_add";

                break;

            case "edit":

            case "copy":

                // if ((!isset($config['news'][$type]['copy']) || $config['news'][$type]['copy'] == false) && $act == 'copy') {

                //     $template = "404";

                //     return false;
                // }

                //get_item();

                $template = "news/man/item_add";

                break;

            case "save":

            case "save_copy":

                //save_item();

                break;

            case "delete":

                //delete_item();

                break;



                /* List */

            case "man_list":

                //get_lists();

                $template = "news/list/lists";

                break;

            case "add_list":

                $template = "news/list/list_add";

                break;

            case "edit_list":

                //get_list();

                $template = "news/list/list_add";

                break;

            case "save_list":

                //save_list();

                break;

            case "delete_list":

                //delete_list();

                break;



                /* Cat */

            case "man_cat":

                //get_cats();

                $template = "news/cat/cats";

                break;

            case "add_cat":

                $template = "news/cat/cat_add";

                break;

            case "edit_cat":

                //get_cat();

                $template = "news/cat/cat_add";

                break;

            case "save_cat":

                //save_cat();

                break;

            case "delete_cat":

                //delete_cat();

                break;



                /* Item */

            case "man_item":

                //get_loais();

                $template = "news/item/loais";

                break;

            case "add_item":

                $template = "news/item/loai_add";

                break;

            case "edit_item":

                //get_loai();

                $template = "news/item/loai_add";

                break;

            case "save_item":

                //save_loai();

                break;

            case "delete_item":

                //delete_loai();

                break;



                /* Sub */

            case "man_sub":

                //get_subs();

                $template = "news/sub/subs";

                break;

            case "add_sub":

                $template = "news/sub/sub_add";

                break;

            case "edit_sub":

                //get_sub();

                $template = "news/sub/sub_add";

                break;

            case "save_sub":

                //save_sub();

                break;

            case "delete_sub":

                //delete_sub();

                break;



                /* Gallery */

            case "man_photo":

            case "add_photo":

            case "edit_photo":

            case "save_photo":

            case "delete_photo":

                include "gallery.php";

                break;



            default:

                $template = "404";
        }
    }
}
