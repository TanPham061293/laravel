@extends('admin.templates.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('showOrder') }}" title="Quản lý đơn hàng">Quản lý
                                đơn hàng</a></li>
                        <li class="breadcrumb-item active">Thông tin đơn hàng <span class="text-primary">{{ $item->madonhang }}</span></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-danger" href="{{ route('showOrder',compact('page')) }}" title="Thoát"><i
                        class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                <input type="hidden" name="dahuy" value="">
            </div>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Thông tin chính</h3>
                </div>
                <div class="card-body row">
                    <div class="form-group col-md-4 col-sm-6">
                        <label>Mã đơn hàng:</label>
                        <p class="text-primary">{{ $item->madonhang }}</p>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label>Họ tên:</label>
                        <p class="font-weight-bold text-uppercase text-success">{{ $item->hoten }}</p>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label>Điện thoại:</label>
                        <p>{{ $item->dienthoai }}</p>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label>Email:</label>
                        <p>{{ $item->email }}</p>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label>Địa chỉ:</label>
                        <p>{{ $item->diachi }}</p>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label>Ngày đặt:</label>
                        <p>{{ date('d/m/Y', $item->ngaytao) }}</p>
                    </div>
                    <div class="form-group col-12">
                        <label for="ghichu">Yêu cầu khác:</label>
                        <textarea class="form-control" name="data[yeucaukhac]" id="yeucaukhac" rows="5" placeholder="Yêu cầu khác">{{ $item->yeucaukhac }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết đơn hàng</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle text-center" width="10%">STT</th>
                                <th class="align-middle">Hình ảnh</th>
                                <th class="align-middle" style="width:30%">Tên sản phẩm</th>
                                <th class="align-middle text-center">Đơn giá</th>
                                <th class="align-middle text-right">Số lượng</th>
                                <th class="align-middle text-right">Tạm tính</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($itemDetail) && count($itemDetail) > 0)
                            @php
                                $gia = 0;
                                $thanhtien = 0;
                                $totalQty = 0;
                                $totalPrice = 0;
                            @endphp
                                @foreach ($itemDetail as $k => $v)
                                @php
                                    $totalQty += $v->soluong;
                                    $gia = ($v->giamoi != 0) ? $v->giamoi : $v->giamoi;
                                    $thanhtien = $v->soluong * $gia;
                                    $totalPrice += $thanhtien;
                                @endphp
                                    <tr>
                                        <td class="align-middle text-center">{{$k += 1}}</td>
                                        <td class="align-middle">
                                            <a title="{{$v->ten}}"><img class="rounded img-preview" onerror="src='{{asset('uploads/noimage/noimage.png')}}'"
                                                    src="{{asset('uploads/'.$v->photo)}}" alt="{{$v->ten}}"></a>
                                        </td>
                                        <td class="align-middle">
                                            <p class="text-primary mb-1">{{$v->ten}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="price-cart-detail">
                                                <span class="price-new-cart-detail">{{number_format($gia)}}</span>
                                            </div>
                                        </td>
                                        <td class="align-middle text-right">{{$v->soluong}}</td>
                                        <td class="align-middle text-right">
                                            <div class="price-cart-detail">
                                                <span class="price-new-cart-detail">{{number_format($thanhtien)}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

            
                            <tr>
                                <td colspan="5" class="title-money-cart-detail">Tổng giá trị đơn hàng:</td>
                                <td colspan="1" class="cast-money-cart-detail">{{number_format($totalPrice) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-danger" href="{{route('showOrder',compact('page'))}}" title="Thoát"><i
                        class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                <input type="hidden" name="id" value="55">
            </div>

        </section>
    </div>
@endsection
