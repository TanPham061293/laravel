@extends('client.templates.layout.layout')
@section('content')
    <div class="_load">
        <div class="pagewrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="mybreadcrumb">

                    </div>
                    <div class="clearfix margin-bottom-30"></div>
                </div>
            </div>
            <div class="notice"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mybreadcrumb py-4">
                        Giỏ Hàng Của Bạn
                    </div>
                    <div class="clearfix margin-bottom-30"></div>
                </div>
            </div>
            <div id="cartResult">
                <?php 
                $none = 'd-none';
                if(isset($items) && count($items) > 0) {
                    $none = '';
                    ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="active text-center">
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Thành tiền</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $totalQty = 0;
                                            $total_price = 0;
                                            $qty = 1;
                                        @endphp
                                        @foreach ($items as $v)
                                            @php

                                                $thanhtien = 0;
                                                foreach ($cart as $v1) {
                                                    if ($v->id == $v1['productid']) {
                                                        $qty = $v1['qty'];
                                                        $gia = $v->giamoi != 0 ? $v->giamoi : $v->gia;
                                                        $thanhtien = $qty * $gia;
                                                        $totalQty += $qty;
                                                        $total_price += $thanhtien;
                                                    }
                                                }
                                            @endphp
                                            <tr class="text-center">
                                                <td><img src="{{ asset('uploads/' . $v->photo) }}" width="50"
                                                        onerror="this.src='{{ asset('upoloads/noimage/noimage.png') }}';"
                                                        alt="{{ $v->tenvi }}"></td>
                                                <td><strong>{{ $v->tenvi }}</strong></td>
                                                <td>
                                                    <div id="qtySelector" class="quantity-col3 align-items-center">
                                                        <p class="tiki-number-input">
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default btn-format" type="button"
                                                                    onclick="cartChange('{{ $qty }}','{{ $qty - 1 }}','{{ $v->id }}')">-</button>
                                                            </span>
                                                            <span class="input-group-addon bootstrap-touchspin-prefix"
                                                                style="display: none;"></span>
                                                            <input id="qty" type="tel" name="qty"
                                                                value="{{ $qty }}" min="1"
                                                                class="form-control" style="display: block;">
                                                            <span class="input-group-addon bootstrap-touchspin-postfix"
                                                                style="display: none;"></span>
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default btn-format" type="button"
                                                                    onclick="cartChange('{{ $qty }}','{{ $qty + 1 }}','{{ $v->id }}')">+</button>
                                                            </span>
                                                        </div>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>{{ number_format($gia) }}</td>
                                                <td>{{ number_format($thanhtien) }}</td>
                                                <td><a class="text-danger"
                                                        href="javascript:cartRemove('{{ $v->id }}');"><i
                                                            style="font-size: 16px;" class="fas fa-times-circle"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="active">
                                            <td colspan="2"></td>
                                            <td colspan="2"><strong>Tổng số:</strong></td>
                                            <td colspan="2"><strong>{{ $totalQty }}</strong></td>
                                        </tr>
                                        <tr class="active">
                                            <td colspan="2"></td>
                                            <td colspan="2"><strong>Tổng tiền:</strong></td>
                                            <td colspan="2"><strong>{{ number_format($total_price) }} vnđ</strong></td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else {?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 alert alert-danger">
                            <h3>Không có sản phẩm nào trong giỏ hàng.</h3>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="modal-footer">
                    <div class="text-right">
                        <a href="{{ route('byCart') }}">
                            <button class="btn _btngray {{ $none }}">Tiến hành thanh toán</button>
                        </a>
                        <a href="{{ Request::session()->has('url_href') ? session('url_href') : '/san-pham' }}">
                            <button class="btn _btnblack ">Tiếp tụ mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <style>
        ._slide {
            display: none;
        }
    </style>
@endsection
