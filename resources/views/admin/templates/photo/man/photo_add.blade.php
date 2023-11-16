@extends('admin.templates.layout.layout')
@php $infor = Request::path()=='admin/addphoto' ? 'Thêm mới ' : 'Chỉnh sửa '; 
$id = isset($item->id) ? $item->id : 0;
@endphp
@section('content')
    <div class="content-wrapper">

        <!-- Content Header -->

        <section class="content-header text-sm">

            <div class="container-fluid">

                <div class="row">

                    <ol class="breadcrumb float-sm-left">

                        <li class="breadcrumb-item"><a href="" title="Bảng điều khiển">Bảng điều khiển</a></li>

                        <li class="breadcrumb-item"><a href="{{ route('getlistPhoto',['type'=>$type]) }}" title="Slideshow">Quản lý
                                Slideshow</a></li>

                        <li class="breadcrumb-item active">{{$infor}} {{$type}}</li>

                    </ol>

                </div>

            </div>

        </section>



        <!-- Main content -->

        <section class="content">

            <form method="post" novalidate action="{{route('savePhoto',compact('type','id','page'))}}" enctype="multipart/form-data">
                @csrf
                <div class="card-footer text-sm sticky-top">

                    <button type="submit" class="btn btn-sm bg-gradient-primary"><i
                            class="far fa-save mr-2"></i>Lưu</button>

                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>

                    <a class="btn btn-sm bg-gradient-danger" href="{{route('getlistPhoto',compact('type','page'))}}"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>

                </div>



                <div class="card card-primary card-outline text-sm">

                    <div class="card-header">

                        <h3 class="card-title">Slideshow: </h3>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>

                        </div>

                    </div>

                    <div class="card-body">


                        <div class="form-group">

                            <label class="change-photo" for="file0">

                                <p>Upload hình ảnh:</p>

                                <div class="photoUpload-zone">
                                    <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"
                                            src="{{ isset($item->photo) ? asset('uploads/' . $item->photo) : '' }}"
                                            onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"alt="Alt Photo" />
                                    </div>
                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                        <input type="file" name="file" id="file-zone">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        {{-- <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                        <p class="photoUpload-or">hoặc</p> --}}
                                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                    </label>
                                    <div class="photoUpload-dimension"><strong class="d-block mt-2 mb-2 text-sm">Width: 1349 px - Height: 620 px
                                        (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</strong></div>
                                </div>

                            </label>

                            

                            <div class="custom-file my-custom-file d-none">

                                <input type="file" class="custom-file-input" name="file0" id="file0">

                                <label class="custom-file-label" for="file0">Chọn file</label>

                            </div>

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

                        <div class="form-group">

                            <label for="link0">Link:</label>

                            <input type="text" class="form-control" name="link" id="link0"
                                placeholder="Link">

                        </div>



                        <div class="form-group">

                            <label for="hienthi0" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>

                            <div class="custom-control custom-checkbox d-inline-block align-middle">

                                <input type="checkbox" class="custom-control-input hienthi-checkbox"
                                    name="hienthi" id="hienthi-checkbox0" checked>

                                <label for="hienthi-checkbox0" class="custom-control-label"></label>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="stt0" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>

                            <input type="number" class="form-control form-control-mini d-inline-block align-middle"
                                min="0" name="stt" id="stt0" placeholder="Số thứ tự"
                                value="1">

                        </div>


                        <div class="card card-primary card-outline card-outline-tabs">

                            <div class="card-header p-0 border-bottom-0">

                                <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">


                                    <li class="nav-item">

                                        <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi-0"
                                            role="tab" aria-controls="tabs-lang-vi-0" aria-selected="true">Tiếng
                                            Việt</a>

                                    </li>


                                </ul>

                            </div>

                            <div class="card-body">

                                <div class="tab-content" id="custom-tabs-three-tabContent-lang">


                                    <div class="tab-pane fade show active" id="tabs-lang-vi-0" role="tabpanel"
                                        aria-labelledby="tabs-lang">


                                        <div class="form-group">

                                            <label for="tenvi0">Tiêu đề *:</label>

                                            <input type="text" class="form-control for-seo @error('tenvi') valierror @enderror" name="tenvi"
                                                        id="tenvi" placeholder="Tiêu đề *" value="{{ isset($item->tenvi) ? $item->tenvi : '' }}" required>
                                                    @error('tenvi')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                        </div>


                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>

                </div>

                <div class="card-footer text-sm">

                    <button type="submit" class="btn btn-sm bg-gradient-primary"><i
                            class="far fa-save mr-2"></i>Lưu</button>

                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>

                    <a class="btn btn-sm bg-gradient-danger" href="{{route('getlistPhoto',compact('type','page'))}}"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>

                </div>

            </form>

        </section>
    </div>
@endsection
