@extends('admin.templates.layout.layout')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header -->

        <section class="content-header text-sm">

            <div class="container-fluid">

                <div class="row">

                    <ol class="breadcrumb float-sm-left">

                        <li class="breadcrumb-item"><a href="" title="Bảng điều khiển">Bảng điều khiển</a></li>

                        <li class="breadcrumb-item active">Quản lý nhận tin</li>

                    </ol>

                </div>

            </div>

        </section>



        <!-- Main content -->

        <section class="content">


            <div class="card card-primary card-outline text-sm mb-0">

                <div class="card-header">

                    <h3 class="card-title">Danh sách Gửi tin</h3>

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


                                <th class="align-middle">Họ tên</th>



                                <th class="align-middle">Email</th>



                                <th class="align-middle">Điện thoại</th>



                                <th class="align-middle">Tập tin</th>



                                <th class="align-middle">Ngày tạo</th>


                            </tr>

                        </thead>


                        <tbody>
                            @if (isset($items) && count($items) > 0)
                                @foreach ($items as $k => $v)
                                    <tr>

                                        <td class="align-middle">

                                            <div class="custom-control custom-checkbox my-checkbox">

                                                <input type="checkbox" class="custom-control-input select-checkbox"
                                                    id="select-checkbox-72" value="72">

                                                <label for="select-checkbox-72" class="custom-control-label"></label>

                                            </div>

                                        </td>

                                        <td class="align-middle">

                                            <input type="number" class="form-control form-control-mini m-auto update-stt"
                                                min="0" value="{{ $k += 1 }}" data-id="72"
                                                data-table="newsletter">

                                        </td>


                                        <td class="align-middle">

                                            <a class="text-dark" href=""
                                                title="{{ $v->ten }}">{{ $v->ten }}</a>

                                        </td>



                                        <td class="align-middle">

                                            <a class="text-dark" href="i"
                                                title="1{{ $v->email }}">{{ $v->email }}</a>

                                        </td>



                                        <td class="align-middle">{{ $v->dienthoai }}</td>



                                        <td class="align-middle">


                                            <a class="bg-gradient-secondary text-white d-inline-block p-1 rounded"
                                                href="#" title="Tập tin trống"><i
                                                    class="fas fa-download mr-2"></i>{{ $v->taptin }}</a>


                                        </td>



                                        <td class="align-middle">{{ date('d/m/Y', $v->ngaytao) }}</td>



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
