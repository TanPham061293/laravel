@extends('admin.templates.layout.layout')
<!-- Content Header -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Chi tiết Sản phẩm cấp 1</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            @php
                $id = isset($item->id) ? $item->id : 0;
            @endphp
            <form class="validation-form" method="post" novalidate action="{{ route('postlist', compact('id', 'page')) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                    <a class="btn btn-sm bg-gradient-danger" href="{{ route('getlist', compact('page')) }}"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Đường dẫn</h3>
                                <span class="pl-2 text-danger"></span>
                            </div>
                            <div class="card-body card-slug">

                                <input type="hidden" class="slug-id" value="">
                                <input type="hidden" class="slug-copy" value="0">

                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                    href="#tabs-sluglang-vi" role="tab" aria-controls="tabs-sluglang-vi"
                                                    aria-selected="true">Tiếng Việt</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                            <div class="tab-pane fade show active" id="tabs-sluglang-vi" role="tabpanel"
                                                aria-labelledby="tabs-lang">
                                                <div class="form-gourp mb-0">
                                                    <label class="d-block">Đường dẫn mẫu *:<span
                                                            class="pl-2 font-weight-normal"
                                                            id="slugurlpreviewvi">{{ env('APP_URL') }}<strong
                                                                class="text-info"></strong></span></label>
                                                    <input type="text" class="form-control slug-input no-validate"
                                                        name="slugvi" id="slugvi" placeholder="Đường dẫn *"
                                                        value="{{ isset($item->tenkhongdauvi) ? $item->tenkhongdauvi : old('slugvi') }}">
                                                    <input type="hidden" id="slug-defaultvi" value="">
                                                    @error('slugvi')
                                                        <p class="alert-slugvi text-danger mt-2 mb-0" id="alert-slug-dangervi">
                                                            <i class="fas fa-exclamation-triangle mr-1"></i>
                                                            <span>{{ $message }}</span>
                                                        </p>
                                                    @enderror
                                                    <p class="alert-slugvi text-success d-none mt-2 mb-0"
                                                        id="alert-slug-successvi">
                                                        <i class="fas fa-check-circle mr-1"></i>
                                                        <span>Đường dẫn hợp lệ.</span>
                                                    </p>
                                                    <script>
                                                        function slugConvert(slug, focus = false) {
                                                            slug = slug.toLowerCase();
                                                            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                                                            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                                                            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                                                            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                                                            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                                                            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                                                            slug = slug.replace(/đ/gi, 'd');
                                                            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                                                            slug = slug.replace(/ /gi, "-");
                                                            slug = slug.replace(/\-\-\-\-\-/gi, '-');
                                                            slug = slug.replace(/\-\-\-\-/gi, '-');
                                                            slug = slug.replace(/\-\-\-/gi, '-');
                                                            slug = slug.replace(/\-\-/gi, '-');
                                                            if (!focus) {
                                                                slug = '@' + slug + '@';
                                                                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                                                            }
                                                            return slug;
                                                        }
                                                        $('body').on("keyup", "#tenvi", function() {
                                                            var title = $("#tenvi").val();
                                                            var slug = slugConvert(title);
                                                            $('#slugvi').val(slug);
                                                        })
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Nội dung Sản phẩm cấp 1</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input hienthi-checkbox" name="hienthi"
                                            id="hienthi-checkbox"
                                            {{ isset($item->hienthi) && $item->hienthi == 1 ? 'checked' : '' }}>
                                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stt" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                                    <input type="number"
                                        class="form-control form-control-mini d-inline-block align-middle" min="0"
                                        name="stt" id="stt" placeholder="Số thứ tự"
                                        value="{{ isset($item->stt) ? $item->stt : '1' }}">
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
                                                    <input type="text"
                                                        class="form-control for-seo @error('tenvi') valierror @enderror"
                                                        name="tenvi" id="tenvi" placeholder="Tiêu đề *"
                                                        value="{{ isset($item->tenvi) ? $item->tenvi : old('tenvi') }}" required>
                                                    @error('tenvi')
                                                        <p class="alert-slugvi text-danger mt-2 mb-0"
                                                            id="alert-slug-dangervi">
                                                            <i class="fas fa-exclamation-triangle mr-1"></i>
                                                            <span>{{ $message }}</span>
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="motavi">Mô tả *:</label>
                                                    <textarea class="form-control for-seo " name="motavi" id="motavi" rows="5" placeholder="Mô tả *">
                                                        {{ isset($item->motavi) ? $item->motavi : old('motavi') }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Hình ảnh Sản phẩm cấp 1</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="photoUpload-zone">
                                    <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"
                                            src="{{ isset($item->photo) ? asset('uploads/' . $item->photo) : '' }}"
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

                </div>
                <div class="card-footer text-sm">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                    <a class="btn btn-sm bg-gradient-danger" href="{{ route('getlist', compact('page')) }}"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                    <input type="hidden" name="id" value="">
                </div>
            </form>
        </section>
    </div>
@endsection
