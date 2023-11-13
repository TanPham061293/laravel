@extends('client.templates.layout.layout')
@section('content')
    <div class="pagewrap">
        {{-- <div class="row">
        <div class="col-md-12">
            <div class="mybreadcrumb"><a class="mybreadcrumb__step mybreadcrumb__step--active"
                    href="http://localhost/caphemocnau/"><span>Trang chủ</span></a><a class="mybreadcrumb__step"
                    href="http://localhost/caphemocnau/san-pham"><span>Sản phẩm</span></a><a class="mybreadcrumb__step"
                    href="http://localhost/caphemocnau/thuc-don"><span>Thực đơn</span></a><a class="mybreadcrumb__step"
                    href="http://localhost/caphemocnau/san-pham-1111"><span>Sản phẩm 1111</span></a>
                <script type="application/ld+json">{"@context": "https://schema.org","@type": "BreadcrumbList","itemListElement": [{"@type":"ListItem","position":1,"name":"S\u1ea3n ph\u1ea9m","item":"http:\/\/localhost\/caphemocnau\/san-pham"},{"@type":"ListItem","position":2,"name":"Th\u1ef1c \u0111\u01a1n","item":"http:\/\/localhost\/caphemocnau\/thuc-don"},{"@type":"ListItem","position":3,"name":"S\u1ea3n ph\u1ea9m 1111","item":"http:\/\/localhost\/caphemocnau\/san-pham-1111"}]}</script>
            </div>
            <div class="clearfix margin-bottom-20"></div>
        </div>
    </div> --}}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-right" data-aos-duration="1000">
                <div style="border: thin #ebebeb solid;">
                    <a href="{{ asset('uploads/thumbs/' . $item->photo) }}" class="MagicZoom" id="Zoomer"><img id="product_image_7"
                            src="{{ asset('uploads/' . $item->photo) }}"></a>

                    <div style="padding-top: 5px;" class="owl-carousel owl-theme owl-carousel6 text-center">
                        <div class="item_owl_sub">
                            <a href="{{ asset('uploads/' . $item->photo) }}" rel="zoom-id: Zoomer" data-zoom-id="Zoomer"
                                rev="{{ asset('uploads/' . $item->photo) }}">
                                <img src="{{ asset('uploads/' . $item->photo) }}"
                                    onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';" class="w100"
                                    alt="{{ $item->tenvi }}" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="wrap_name_vote">
                    <div class="product_info_name">{{ $item->tenvi }}</div>
                </div>
                <div class="clearfix margin-bottom-10"></div>
                <div>
                    @if ($item->giamoi != 0)
                        <div class="_pricekm">
                            Giá:&nbsp {{ number_format($item->giamoi) . ' VNĐ' }} </div>
                        <div class="_pricegoc">
                            {{ $item->gia != 0 ? number_format($item->gia) . ' VNĐ' : '' }}
                        </div>
                    @else
                        <div class="_pricekm">
                            Giá:&nbsp{{ $item->gia != 0 ? number_format($item->gia) . ' VNĐ' : ' Liên hệ.' }}
                        </div>
                    @endif
                </div>
                <hr style="margin: 10px 0;">
                <div>
                    {{ $item->motavi }}
                </div>
                <div>
                    {{-- <div id="qtySelector" class="quantity-col1">
                        <p class="quantity-label">Số lượng:</p>
                        <p class="tiki-number-input">
                        <div class="input-group bootstrap-touchspin">
                            <span class="input-group-btn">
                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                            </span>
                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                            <input id="qty" type="tel" name="qty" value="1" min="1"
                                class="form-control" style="display: block;">
                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                            <span class="input-group-btn">
                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                            </span>
                        </div>
                        </p>
                    </div> --}}
                    {{-- <div class="product-actions">
                        <button type="button" onclick="addCart_Qty(313)" class="btnAddToCart">MUA NGAY</button>
                    </div> --}}
                </div>
                <div class="clearfix"></div>
                <hr>
                <div>
                    <!--noindex-->
                    <div class="social-share">
                        <b>Chia sẻ:</b>
                        <div id="share-buttons"></div>
                    </div>

                    <!--/noindex-->
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos="fade-down" data-aos-duration="1000">
                <div class="clearfix margin-bottom-20"></div>
                <div class="_mytab-detail">
                    <h3> Chi Tiết Sản Phẩm</h3>
                    {{-- <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#content" role="tab" data-toggle="tab">Chi Tiết Sản Phẩm</a>
                        </li>
                        <li><a href="#comment" role="tab" data-toggle="tab">Bình Luận</a></li>
                    </ul> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="content">
                            <p>{{ Str::of($item->noidungvi)->toHtmlString() }}</p>
                        </div>
                        {{-- <div class="tab-pane fade" id="comment">
                            <div class="fb-comments" data-href="http://localhost/caphemocnau/san-pham-1111" data-width=""
                                data-numposts="5"></div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix margin-bottom-20"></div>
        @if (isset($related_prd) && count($related_prd))
            <div style="padding: 15px;">
                <h3> Sản phẩm tương tự</h3>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1000">
                    <div class="owl-carousel owl-theme product-same-brands">
                        @foreach ($related_prd as $k => $v)
                            <div class="_boxpr">
                                <div class="_imgsp">
                                    <a href="/san-pham/item/{{ $v->tenkhongdauvi }}" title="{{ $v->tenvi }}"><img
                                            src="{{ asset('uploads/' . $v->photo) }}"
                                            onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"
                                            alt="{{ $v->tenvi }}" /></a>
                                </div>
                                <div class="_box-price">
                                    <div class="_namepr"><a href="/san-pham/item/{{ $v->tenkhongdauvi }}"
                                            title="{{$v->tenvi}}">{{$v->tenvi}}</a></div>
                                    @if ($v->giamoi != 0)
                                        <div class="_pricekm">
                                            Giá:&nbsp{{ number_format($v->giamoi) . ' VNĐ' }} </div>
                                        <div class="_pricegoc">
                                            {{ $v->gia != 0 ? number_format($v->gia) . ' VNĐ' : '' }}
                                        </div>
                                    @else
                                        <div class="_pricekm">
                                            Giá:&nbsp{{ $v->gia != 0 ? number_format($v->gia) . ' VNĐ' : ' Liên hệ.' }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
