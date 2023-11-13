<?php

// function transfer($msg='', $page='', $stt=true)
// {
//     global $config_base;

//     $basehref = $config_base;
//     $showtext = $msg;
//     $page_transfer = $page;
//     $stt = $stt;


//     // include("./templates/layout/transfer");
//      return view('admin.templates.layout.transfer');
// }
function getRealIPAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
