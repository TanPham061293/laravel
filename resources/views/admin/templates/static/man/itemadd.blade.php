@php
    $col = $type == 'gioi-thieu' ? 'col-xl-8' : 'col-xl-12';
@endphp
@extends('admin.templates.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Quản lý trang tĩnh</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="validation-form" novalidate method="post" action="{{ route('saveStatic', compact('type')) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
                <div class="row">
                    <div class="{{ $col }}">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                {{-- <h3 class="card-title">Nội dung</h3> --}}
                                @if (session('success'))
                                    <div class="col-8">
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>{{ session('success') }}</strong>
                                            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button> --}}
                                        </div>
                                    </div>
                                @endif
                                {{-- <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                @if ($type == 'gioi-thieu')
                                    <div class="form-group">
                                        <label class="change-file mb-1 mr-2" for="file-taptin">
                                            <p>Upload tập tin:</p>
                                            <strong class="ml-2">
                                                <span class="btn btn-sm bg-gradient-success"><i
                                                        class="fas fa-file-upload mr-2"></i>Chọn tập tin</span>
                                                <div><b class="text-sm text-split"></b></div>
                                            </strong>
                                        </label>
                                        <strong
                                            class="d-block mt-2 mb-2 text-sm">doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS</strong>
                                        <div class="custom-file my-custom-file d-none">
                                            <input type="file" class="custom-file-input" name="file-taptin"
                                                id="file-taptin">
                                            <label class="custom-file-label" for="file-taptin">Chọn file</label>
                                        </div>
                                        <a class="btn btn-sm bg-gradient-primary text-white d-inline-block align-middle p-2 rounded mb-1"
                                            href="" title="Download tập tin hiện tại"><i
                                                class="fas fa-download mr-2"></i>Download tập tin hiện tại</a>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input hienthi-checkbox" name="hienthi"
                                            id="hienthi-checkbox" checked>
                                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                    href="#tabs-lang-vi" role="tab" aria-controls="tabs-lang-vi"
                                                    aria-selected="true">Tiếng Việt</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body card-article">
                                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                            <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                                aria-labelledby="tabs-lang">
                                                <div class="form-group">
                                                    <label for="tenvi">Tiêu đề *:</label>
                                                    <input type="text" class="form-control for-seo" name="tenvi"
                                                        id="tenvi" placeholder="Tiêu đề *" value="{{ $item->tenvi }}"
                                                        required>
                                                </div>
                                                @if ($type == 'gioi-thieu')
                                                    <div class="form-group">
                                                        <label for="motavi">Mô tả *:</label>
                                                        <textarea class="form-control for-seo " name="motavi" id="motavi" rows="5" placeholder="Mô tả *">
                                                        {{ $item->motavi }}
                                                    </textarea>
                                                    </div>
                                                @endif
                                                <div class="form-group">
                                                    <label for="noidungvi">Nội dung *:</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="noidungvi" id="noidungvi" rows="5"
                                                        placeholder="Nội dung *">{{ $item->noidungvi }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($type == 'gioi-thieu')
                        <div class="col-xl-4">
                            <div class="card card-primary card-outline text-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Hình ảnh Giới thiệu</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="photoUpload-zone">
                                        <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"
                                                src="{{ isset($item->photo) ? asset('uploads/static/' . $item->photo) : '' }}"
                                                onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"alt="Alt Photo" />
                                        </div>
                                        <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                            <input type="file" name="file" id="file-zone">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                            <p class="photoUpload-or">hoặc</p>
                                            <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                        </label>
                                        <div class="photoUpload-dimension">Width: 450 px - Height: 450 px
                                            (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</div>
                                    </div>
                                    <script>
                                        function readImage(inputFile, elementPhoto) {
                                            if (inputFile[0].files[0]) {
                                                if (inputFile[0].files[0].name.match(/.(jpg|jpeg|png|gif)$/i)) {
                                                    var size = parseInt(inputFile[0].files[0].size) / 1024;
                                                    if (size <= 4096) {
                                                        var reader = new FileReader();
                                                        reader.onload = function(e) {
                                                            $(elementPhoto).attr('src', e.target.result);
                                                        }
                                                        reader.readAsDataURL(inputFile[0].files[0]);
                                                    } else {
                                                        //notifyDialog("Dung lượng hình ảnh lớn. Dung lượng cho phép <= 4MB ~ 4096KB");
                                                        alert('Dung lượng hình ảnh lớn. Dung lượng cho phép <= 4MB ~ 4096KB"')
                                                        return false;
                                                    }
                                                } else {
                                                    //notifyDialog("Hình ảnh không hợp lệ");
                                                    alert("Hình ảnh không hợp lệ");
                                                    return false;
                                                }
                                            } else {
                                                //notifyDialog("Dữ liệu không hợp lệ");
                                                alert("Dữ liệu không hợp lệ")
                                                return false;
                                            }
                                        }
                                        /* Photo zone */
                                        function photoZone(eDrag, iDrag, eLoad) {
                                            if ($(eDrag).length) {
                                                /* Drag over */
                                                $(eDrag).on("dragover", function() {
                                                    $(this).addClass("drag-over");
                                                    return false;
                                                });
                                                /* Drag leave */
                                                $(eDrag).on("dragleave", function() {
                                                    $(this).removeClass("drag-over");
                                                    return false;
                                                });
                                                /* Drop */
                                                $(eDrag).on("drop", function(e) {
                                                    e.preventDefault();
                                                    $(this).removeClass("drag-over");
                                                    var lengthZone = e.originalEvent.dataTransfer.files.length;
                                                    if (lengthZone == 1) {
                                                        $(iDrag).prop("files", e.originalEvent.dataTransfer.files);
                                                        readImage($(iDrag), eLoad);
                                                    } else if (lengthZone > 1) {
                                                        //notifyDialog("Bạn chỉ được chọn 1 hình ảnh để upload");
                                                        alert("Bạn chỉ được chọn 1 hình ảnh để upload");
                                                        return false;
                                                    } else {
                                                        //notifyDialog("Dữ liệu không hợp lệ");
                                                        alert("Dữ liệu không hợp lệ");
                                                        return false;
                                                    }
                                                });
                                                /* File zone */
                                                $(iDrag).change(function() {
                                                    readImage($(this), eLoad);
                                                });
                                            }
                                        }
                                        photoZone("#photo-zone", "#file-zone", "#photoUpload-preview img");
                                    </script>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="card-footer text-sm">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
            </form>
        </section>
    </div>
@endsection
