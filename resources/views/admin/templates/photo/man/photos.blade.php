<!-- Content Header -->

@extends('admin.templates.layout.layout')
@section('content')

    @php
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
    @endphp
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Danh sách Slide</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-primary text-white" href="{{ route('addPhoto',compact('type','page')) }}" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-href="{{ route('deletePhoto', ['type'=>$type,'page' => $page]) }}" title="Xóa tất cả"
                    onclick="deleteListItems()"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    {{-- <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=product&act=man_list&type=san-pham&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=product&act=man_list&type=san-pham&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="row card-header">
                    <div class="col-4">
                        <h3 class="card-title">Danh sách Slider</h3>
                    </div>
                    @if (isset($success))
                        <div class="col-8">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>{{ $success }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    @if (isset($error))
                        <div class="col-8">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ $error }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
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
                                <th class="align-middle text-center" width="10%">STT</th>
                                <th class="align-middle">Hình</th>
                                <th class="align-middle" style="width:30%">Tiêu đề</th>
                                {{-- <th class="align-middle text-center">Nổi bật</th> --}}
                                <th class="align-middle text-center">Hiển thị</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($items) && count($items) > 0)
                                @foreach ($items as $k => $v)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox my-checkbox">
                                                <input type="checkbox" class="custom-control-input select-checkbox"
                                                    id="select-checkbox-{{ $v->id }}" value="{{ $v->id }}">
                                                <label for="select-checkbox-32" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <input type="number" class="form-control form-control-mini m-auto update-stt"
                                                min="0" value="{{ $k +=1 }}" data-id="{{ $v->id }}"
                                                data-table="product_list">
                                        </td>
                                        <td class="align-middle">
                                            <a href=""
                                                title="Thực đơn"><img class="rounded img-preview"
                                                    onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"
                                                    src="{{ asset('uploads/' . $v->photo) }}" alt="Thực đơn"></a>
                                        </td>
                                        <td class="align-middle">
                                            <a class="text-dark"
                                                href=""
                                                title="Thực đơn">{{ $v->tenvi }}</a>
                                        </td>
                                        {{-- <td class="align-middle text-center">
                                            <div class="custom-control custom-checkbox my-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input show-checkbox{{ $v->id }}"
                                                    id="show-checkbox-noibat-{{ $v->id }}" data-table="product_list"
                                                    data-href="{{ route('ajaxStatus') }}" data-id="{{ $v->id }}"
                                                    data-loai="noibat"
                                                    onclick="changeStatus({{ $v->id }},'show-checkbox')"
                                                    {{ $v->noibat == 1 ? 'checked' : '' }}>
                                                <label for="show-checkbox-noibat-{{ $v->id }}"
                                                    class="custom-control-label"></label>
                                            </div>
                                        </td> --}}
                                        <td class="align-middle text-center">
                                            <div class="custom-control custom-checkbox my-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input show-checkbox-{{ $v->id }}"
                                                    id="show-checkbox-{{ $v->id }}" data-table="product_list"
                                                    data-href="{{ route('ajaxStatusPhoto') }}" data-id="{{ $v->id }}"
                                                    data-loai="hienthi"
                                                    onclick="changeStatus({{ $v->id }},'show-checkbox-')"
                                                    {{ $v->hienthi == 1 ? 'checked' : '' }}>
                                                <label for="show-checkbox-{{ $v->id }}"
                                                    class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-md text-nowrap">
                                            <a class="text-primary mr-2"
                                                href="{{ route('editPhoto', ['type'=>$type,'id' => $v->id, 'page' => $page]) }}"
                                                title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                            <a class="text-danger" id="delete-item-{{ $v->id }}"
                                                data-href="{{ route('deletePhoto', ['type'=>$type,'id' => $v->id, 'page' => $page]) }}"
                                                onclick="deleteItems({{ $v->id }})" title="Xóa"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
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
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-primary text-white" href="{{ route('addPhoto',compact('type','page')) }}" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-href="{{ route('deletePhoto', ['type'=>$type,'page' => $page]) }}" title="Xóa tất cả"
                    onclick="deleteListItems()"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>
    </div>
@endsection
