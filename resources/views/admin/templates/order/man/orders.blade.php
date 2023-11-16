@extends('admin.templates.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Quản lý đơn hàng</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title card-title-order d-inline-block align-middle float-none">Danh sách đơn hàng</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle" width="5%">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                        <label for="selectall-checkbox" class="custom-control-label"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Mã đơn hàng</th>
                                <th class="align-middle" style="width:15%">Họ tên</th>
                                <th class="align-middle" style="width:15%">Email</th>
                                <th class="align-middle" style="width:15%">Điện thoại</th>
                                <th class="align-middle">Ngày đặt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($items) && count($items) > 0)
                                @foreach ($items as $k => $v)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox my-checkbox">
                                                <input type="checkbox" class="custom-control-input select-checkbox"
                                                    id="select-checkbox-55" value="55">
                                                <label for="select-checkbox-55" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a class="text-primary" href="{{route('orderDetail',['idOrder'=>$v->id])}}" title="{{ $v->madonhang }}">{{ $v->madonhang }}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a class="text-primary" href="{{route('orderDetail',['idOrder'=>$v->id])}}" title="{{ $v->hoten }}">{{ $v->hoten }}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a class="text-primary" href="{{route('orderDetail',['idOrder'=>$v->id])}}" title="{{ $v->email }}">{{ $v->email }}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a class="text-primary" href="{{route('orderDetail',['idOrder'=>$v->id])}}" title="{{ $v->dienthoai }}">{{ $v->dienthoai }}</a>
                                        </td>
                                        <td class="align-middle">{{ date('d/m/Y', $v->ngaytao) }}</td>
                                        <td class="align-middle">
                                            <span class="text-info"></span>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="100">
                                    <div class="alert alert-info text-center">Không tìm thấy dữ liệu.</div>
                                </td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
            @if (isset($items))
                <div class="mt-3">
                    <div class="pagination1">{{ $items->links() }}</div>
                </div>
                <div class="clearfix"></div>
                <style>
                    .pagination1 {
                        float: right;
                        margin-right: 30px;
                    }
                </style>
            @endif
        </section>

    </div>
@endsection
