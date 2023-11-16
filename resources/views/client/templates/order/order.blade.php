@extends('client/templates/layout/layout')
@section('content')
    <div class="clearfix margin-bottom-30"></div>
    <div class="pagewrap">
        <div class="row">
            <div class="col-md-12">
                <div class="mybreadcrumb py-4">
                    Thanh Toán Đơn hàng.
                </div>
                <div class="clearfix margin-bottom-30"></div>
            </div>
        </div>
        @if(session('success'))
        <div class="row">
            <div class="col-12 alert alert-info">{{session('success')}}</div>
        </div>
        @endif
        <form id="customers-form" action="{{route('sendOrder',['id' => $item->id])}}" novalidate method="post" class="validation-cart">
            @csrf
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 wow fadeInLeft">
                    <div class="form-group field-customers-name required">
                        <label class="control-label" for="customers-name" style="padding-left: 5px">Họ &amp; tên</label>
                        <input type="text" id="customers-name" class="form-control" name="ten" maxlength="255"
                            required>
                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-email">
                        <label class="control-label" for="customers-email" style="padding-left: 5px">E-mail</label>
                        <input type="text" id="customers-email" class="form-control" name="email" maxlength="255"
                            required>
                        <div class="invalid-feedback">Vui lòng nhập vào địa chỉ Email.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-phone required">
                        <label class="control-label" for="customers-phone" style="padding-left: 5px">Điện thoại</label>
                        <input type="text" id="customers-phone" class="form-control" name="dienthoai" maxlength="255"
                            required>
                        <div class="invalid-feedback">Vui lòng nhập vào số điện thoại.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-address required">
                        <label class="control-label" for="customers-address" style="padding-left: 5px">Địa chỉ nhận hàng</label>
                        <input type="text" id="customers-address" class="form-control" name="diachi" required>
                        <div class="invalid-feedback">Vui lòng nhập vào địa chỉ nhận hàng.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-body">
                        <label class="control-label" for="customers-body" style="padding-left: 5px">Ghi chú đơn hàng</label>
                        <textarea id="customers-body" class="form-control" name="ghichu" rows="2"></textarea>
                        <div class="invalid-feedback">Vui lòng nhập vào ghi chú đơn hàng.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="clearfix margin-bottom-20"></div>
                    <div class="form-group">
                        <input type="hidden" name ="thanhtoan">
                         <button type="submit" class="btn btn-primary">Gửi đơn hàng</button>
                    </div>
                </div>

                
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mt-4 wow fadeInRight"
                    style="visibility: visible; animation-name: fadeInRight;">
                    <div class="_load">
                        <div class="_boxdh">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="active">
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $gia = $item->giamoi != 0 ? number_format($item->giamoi) : number_format($item->gia);
                                            $tongtien = $item->giamoi != 0 ? number_format($item->giamoi * $qty) : number_format($item->gia * $qty);
                                        @endphp
                                        <tr>
                                            <td><img src="{{ asset('uploads/' . $item->photo) }}" width="50"
                                                    onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"
                                                    alt="Sản phẩm 1111"></td>
                                            <td><strong>{{ $item->tenvi }}</strong></td>
                                            <td>
                                                <div id="qtySelector" class="quantity-col1">
                                                    <p class="tiki-number-input">
                                                    <div class="input-group bootstrap-touchspin post">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default bootstrap-touchspin-down"
                                                                type="button">-</button>
                                                        </span>
                                                        <span class="input-group-addon bootstrap-touchspin-prefix"
                                                            style="display: none;"></span>
                                                        <input id="qty" type="tel" name="qty"
                                                            value="{{ $qty }}" min="1" class="form-control"
                                                            style="display: block;">
                                                        <span class="input-group-addon bootstrap-touchspin-postfix"
                                                            style="display: none;"></span>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default bootstrap-touchspin-up"
                                                                type="button">+</button>
                                                        </span>
                                                    </div>
                                                    </p>
                                                </div>
                                            </td>
                                            <td><span id='price'>{{ $gia }}</span></td>
                                            <td> <span id='total_tt'>{{ $tongtien }}</span> </td>
                                        </tr>
                                        <tr class="active">
                                            <td></td>
                                            <td colspan="2"><strong>Tổng số:</strong></td>
                                            <td colspan="2" id="totalQty">
                                                <strong>{{ $qty }}</strong>

                                            </td>
                                        </tr>
                                        <tr class="active">
                                            <td></td>
                                            <td colspan="2"><strong>Tổng tiền:</strong></td>
                                            <td colspan="2" id='totalM'><strong>{{ $tongtien }} vnđ</strong>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                            {{-- <div class="clearfix margin-bottom-20"></div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </form>
        <div class="modal-footer pos">
            <div class="text-right">
                <a href="{{ Request::session()->has('url_href') ? session('url_href') : '/san-pham' }}">
                    <button class="btn _btnblack">Tiếp tục mua hàng</button>
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix margin-bottom-20"></div>
    <style>
        ._slide {
            display: none;
        }
    </style>
@endsection
