

<div class="_banner">
    <div class="pagewrap">
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-right">
                <div class="menuMain">
                    <ul class="sky-mega-menu sky-mega-menu-anim-flip">
                        <li>
                            <a class="_active-home {{Request::is('trang-chu') ? 'current' : ''}}" href="{{route('client.home')}}" title="Trang chủ">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <a class="{{Request::is('gioi-thieu') ? 'current' :''}}" href="{{route('client.introduce')}}" title="Giới Thiệu">
                                Giới Thiệu
                            </a>
                        </li>
                        <li aria-haspopup="true">
                            <a href="{{route('client.product')}}" title="Sản phẩm" class="{{Str::contains(Request::path(),'san-pham') ? 'current' : ''}}">
                                Sản phẩm </a>
                                @if(isset($list_menu_nb) && count($list_menu_nb) > 0)
                            <div class="grid-container2">
                                <ul>
                                    @foreach($list_menu_nb as $k => $v)
                                    <li>
                                        <a class="" href="/san-pham/list/{{$v->tenkhongdauvi}}" title="{{$v->tenvi}}">
                                            {{$v->tenvi}} </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </li>
                        {{-- <li aria-haspopup="true">
                            <a href="" title="Dịch Vụ" class="">
                                Dịch Vụ </a>
                            <div class="grid-container2">
                                <ul>
                                    <li>
                                        <a class="" href="bao-ve-yeu-nhan" title="Bảo Vệ Yếu Nhân ">
                                            Bảo Vệ Yếu Nhân </a>
                                    </li>
                                    <li>
                                        <a class="" href="bao-ve-nha-mayxi-nghiep" title="Bảo Vệ Nhà Máy">
                                            Bảo Vệ Nhà Máy </a>
                                    </li>
                                    <li>
                                        <a class="" href="dich-vu-ho-tong" title="Dịch Vụ Hộ Tống ">
                                            Dịch Vụ Hộ Tống </a>
                                    </li>
                                    <li>
                                        <a class="" href="dich-vu-bao-ve-tai-san-co-dinh"
                                            title="Dịch Vụ Bảo Vệ Tài Sản Cố ĐỊnh ">
                                            Dịch Vụ Bảo Vệ Tài Sản Cố ĐỊnh </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="" href="" title="Tin tức & sự kiện" disable>
                                Tin tức & sự kiện
                            </a>
                        </li>
                        <li>
                            <a class="" href="" title="Liên hệ">
                                Liên hệ
                            </a>
                        </li> --}}
                        {{-- <li id="nutsearch"><i class="fas fa-search"></i></li>
                        <div class="_frmTK _box-search">
                            <form class="_frmsearch" action="tim-kiem" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control search_moi" name="keyword" value=""
                                        placeholder="Enter keyword.." onkeypress="doEnter('event','keyword')">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn _btnsearch" onclick="onSearch('keyword')"><i
                                                class="fas fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div> --}}
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
