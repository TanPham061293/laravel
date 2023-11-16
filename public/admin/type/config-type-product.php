<?php
    /* Sản phẩm */
    $nametype = "san-pham";
    $config['product'][$nametype]['title_main'] = "Sản Phẩm";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = false;
    // =================
    $config['product'][$nametype]['mau'] = false;
    $config['product'][$nametype]['size'] = false;
    $config['product'][$nametype]['soluong'] = false;
    $config['product'][$nametype]['soluongnhap'] = false;
    $config['product'][$nametype]['coupon'] = false;
    $config['product'][$nametype]['import'] = false;
    $config['product'][$nametype]['export'] = false;
    
    // =================    
    $config['product'][$nametype]['item'] = false;
    $config['product'][$nametype]['sub'] = false;
    $config['product'][$nametype]['brand'] = false;
    $config['product'][$nametype]['tags'] = false;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['copy_image'] = false;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật",);
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['images1'] = false;
    $config['product'][$nametype]['images2'] = false;
    $config['product'][$nametype]['images3'] = false;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh sản phẩm",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 3,
            "images_photo" => true,
            "cart_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 540,
            "height_photo" => 540,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        ),
        "video" => array
        (
            "title_main_photo" => "Video sản phẩm",
            "title_sub_photo" => "Video",
            "number_photo" => 2,
            "video_photo" => true,
            "tieude_photo" => true
        ),
        "taptin" => array
        (
            "title_main_photo" => "Tập tin sản phẩm",
            "title_sub_photo" => "Tập tin",
            "number_photo" => 2,
            "file_photo" => true,
            "tieude_photo" => true,
            "file_type_photo" => 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS'
        )
    );
    $config['product'][$nametype]['ma'] = true;
    $config['product'][$nametype]['gia'] = true;
    $config['product'][$nametype]['giamoi'] = true;
    $config['product'][$nametype]['giakm'] = true;
    $config['product'][$nametype]['mota'] = true;
    $config['product'][$nametype]['mota_cke'] = false;
    $config['product'][$nametype]['linkqr'] = true;
    $config['product'][$nametype]['noidung'] = true;
    $config['product'][$nametype]['noidung_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 800;
    $config['product'][$nametype]['height'] = 809;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';


    // /* Sản phẩm (List) */
    $config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
    $config['product'][$nametype]['images_list'] = true;
    $config['product'][$nametype]['show_images_list'] = true;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['gallery_list'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh sản phẩm cấp 1",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 2,
            "images_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 300,
            "height_photo" => 200,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF',
        ),
        "video" => array
        (
            "title_main_photo" => "Video sản phẩm cấp 1",
            "title_sub_photo" => "Video",
            "number_photo" => 2,
            "video_photo" => true,
            "tieude_photo" => true
        )
    );
    $config['product'][$nametype]['mota_list'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    $config['product'][$nametype]['width_list'] = 450;
    $config['product'][$nametype]['height_list'] = 450;
    $config['product'][$nametype]['thumb_list'] = '100x100x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    // /* Sản phẩm (Cat) */
    $config['product'][$nametype]['title_main_cat'] = "Sản phẩm cấp 2";
    $config['product'][$nametype]['images_cat'] = true;
    $config['product'][$nametype]['show_images_cat'] = true;
    $config['product'][$nametype]['slug_cat'] = true;
    $config['product'][$nametype]['check_cat'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['mota_cat'] = true;
    $config['product'][$nametype]['seo_cat'] = true;
    $config['product'][$nametype]['width_cat'] = 300;
    $config['product'][$nametype]['height_cat'] = 200;
    $config['product'][$nametype]['thumb_cat'] = '100x100x1';
    $config['product'][$nametype]['img_type_cat'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    /* Sản phẩm (Item) */
    /* Sản phẩm (Hãng) */
    $config['product'][$nametype]['title_main_brand'] = "Hãng sản phẩm";
    $config['product'][$nametype]['images_brand'] = true;
    $config['product'][$nametype]['show_images_brand'] = true;
    $config['product'][$nametype]['slug_brand'] = true;
    $config['product'][$nametype]['check_brand'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['seo_brand'] = true;
    $config['product'][$nametype]['width_brand'] = 150;
    $config['product'][$nametype]['height_brand'] = 150;
    $config['product'][$nametype]['thumb_brand'] = '100x100x1';
    $config['product'][$nametype]['img_type_brand'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

?>