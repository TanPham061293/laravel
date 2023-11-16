<?php
// $linkSave = "index.php?com=setting&act=save";
// $options = (isset($item['options']) && $item['options'] != '') ? json_decode($item['options'],true) : null;
?>
@extends('admin.templates.layout.layout')
<!-- Content Header -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Thông tin công ty</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="validation-form" novalidate method="post" action="index.php?com=setting&act=save"
                enctype="multipart/form-data">
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin chung</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="diachi">Địa chỉ:</label>
                                <input type="text" class="form-control" name="data[options][diachi]" id="diachi"
                                    placeholder="Địa chỉ"
                                    value=" Tầng 3, Tòa nhà Toàn Cầu Pumps, số 21 Nguyễn Hiến Lê, Phường 13, Quận Tân Bình">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="data[options][email]" id="email"
                                    placeholder="Email" value="email@gmail.com">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="hotline">Hotline:</label>
                                <input type="text" class="form-control" name="data[options][hotline]" id="hotline"
                                    placeholder="Hotline" value=" 02866741499">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="dienthoai">Điện thoại:</label>
                                <input type="text" class="form-control" name="data[options][dienthoai]" id="dienthoai"
                                    placeholder="Điện thoại" value="0982287478">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="zalo">Zalo:</label>
                                <input type="text" class="form-control" name="data[options][zalo]" id="zalo"
                                    placeholder="Zalo" value="0982287478">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="oaidzalo">OAID Zalo:</label>
                                <input type="text" class="form-control" name="data[options][oaidzalo]" id="oaidzalo"
                                    placeholder="OAID Zalo" value="">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="website">Website:</label>
                                <input type="text" class="form-control" name="data[options][website]" id="website"
                                    placeholder="Website" value="https://bmweb.vn/">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="fanpage">Fanpage:</label>
                                <input type="text" class="form-control" name="data[options][fanpage]" id="fanpage"
                                    placeholder="Fanpage" value="https://www.facebook.com/LienquanMobile/?locale=vi_VN">
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <label for="toado">Tọa độ google map:</label>
                                <input type="text" class="form-control" name="data[options][toado]" id="toado"
                                    placeholder="Tọa độ google map" value="10.834134, 106.635975">
                            </div>

                            <div class="form-group col-md-4 col-sm-6">
                                <label for="pageindex">Page index:</label>
                                <input type="text" class="form-control" name="data[options][pageindex]"
                                    id="pageindex" placeholder="page index" value="4">
                            </div>




                        </div>


                        <div class="form-group">
                            <label for="toado_iframe">
                                <span>Tọa độ google map iframe:</span>
                                <a class="text-sm font-weight-normal ml-1" href="https://www.google.com/maps"
                                    target="_blank" title="Lấy mã nhúng google map">(Lấy mã nhúng)</a>
                            </label>
                            <textarea class="form-control" name="data[options][toado_iframe]" id="toado_iframe" rows="5"
                                placeholder="Tọa độ google map iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.5121940534627!2d106.64704401480134!3d10.848593392272566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175299705a365bf%3A0x9e827e4a90c7a80c!2zMjUyIFBo4bqhbSBWxINuIENoacOqdSwgUGjGsOG7nW5nIDksIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1604231854254!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></textarea>
                        </div>
                        <div class="form-group">
                            <label for="analytics">Google analytics:</label>
                            <textarea class="form-control" name="data[analytics]" id="analytics" rows="5" placeholder="Google analytics"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YV748SY91S"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-YV748SY91S');
</script></textarea>
                        </div>
                        <div class="form-group">
                            <label for="mastertool">Google Webmaster Tool:</label>
                            <textarea class="form-control" name="data[mastertool]" id="mastertool" rows="5"
                                placeholder="Google Webmaster Tool"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="headjs">Head JS:</label>
                            <textarea class="form-control" name="data[headjs]" id="headjs" rows="5" placeholder="Head JS"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bodyjs">Body JS:</label>
                            <textarea class="form-control" name="data[bodyjs]" id="bodyjs" rows="5" placeholder="Body JS"></textarea>
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
                                            <label for="tenvi">Tiêu đề (vi):</label>
                                            <input type="text" class="form-control for-seo" name="data[tenvi]"
                                                id="tenvi" placeholder="Tiêu đề (vi)" value="TIÊU ĐỀ SETTING"
                                                required>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                        aria-labelledby="tabs-lang">
                                        <div class="form-group">
                                            <label for="sloganvi">Slogan (vi):</label>
                                            <input type="text" class="form-control for-seo" name="data[sloganvi]"
                                                id="sloganvi" placeholder="Slogan (vi)" value="SLOGAN SETTING">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                        aria-labelledby="tabs-lang">
                                        <div class="form-group">
                                            <label for="copyrightvi">Copyright (vi):</label>
                                            <input type="text" class="form-control for-seo" name="data[copyrightvi]"
                                                id="copyrightvi" placeholder="Copyright (vi)" value="COPYRIGHT SETTING">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="title_desct1">Tiêu đề sản phẩm trang chủ (vi):</label>
                                        <input type="text" class="form-control for-seo" name="data[title_desct1vi]"
                                            id="title_desct1vi" placeholder="title_desct1 (vi)" value="TIÊU ĐỀ SẢN PHẨM">
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Nội dung SEO</h3>
                        <a class="btn btn-sm bg-gradient-success d-inline-block text-white float-right create-seo"
                            title="Tạo SEO">Tạo SEO</a>
                    </div>
                    <div class="card-body">
                        <!-- SEO -->
                        <div class="card-seo">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                href="#tabs-seolang-vi" role="tab" aria-controls="tabs-seolang-vi"
                                                aria-selected="true">SEO (Tiếng Việt)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                        <div class="tab-pane fade show active" id="tabs-seolang-vi" role="tabpanel"
                                            aria-labelledby="tabs-lang">
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="titlevi">SEO Title (vi):</label>
                                                    <strong class="count-seo"><span>0</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo title-seo"
                                                    name="dataSeo[titlevi]" id="titlevi" placeholder="SEO Title (vi)"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="keywordsvi">SEO Keywords (vi):</label>
                                                    <strong class="count-seo"><span>0</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo keywords-seo"
                                                    name="dataSeo[keywordsvi]" id="keywordsvi"
                                                    placeholder="SEO Keywords (vi)" value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="descriptionvi">SEO Description (vi):</label>
                                                    <strong class="count-seo"><span>0</span>/320 ký tự</strong>
                                                </div>
                                                <textarea class="form-control check-seo description-seo" name="dataSeo[descriptionvi]" id="descriptionvi"
                                                    maxlength="320" rows="5" placeholder="SEO Description (vi)"></textarea>
                                            </div>

                                            <!-- SEO preview -->
                                            <div
                                                class="form-group form-group-seo-preview callout callout-warning mb-0 d-none">
                                                <label class="label-seo-preview"><i class="fas fa-info mr-2"></i>Khi lên
                                                    top, page này sẽ hiển thị theo dạng mẫu như sau:</label>
                                                <div class="seo-preview">
                                                    <p class="slug-seo-preview" id="seourlpreviewvi"
                                                        data-seourlstatic="0">
                                                        http://localhost/caphemocnauedit/<strong></strong></p>
                                                    <p class="title-seo-preview text-split" id="title-seo-previewvi"></p>
                                                    <p class="description-seo-preview text-split"
                                                        id="description-seo-previewvi"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="seo-create" value="vi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-sm">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                    <input type="hidden" name="id" value="18">
                </div>
            </form>
        </section>

        <!-- Setting js -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".mailertype").click(function() {
                    var value = parseInt($(this).val());

                    if (value == 1) {
                        $(".host-email").removeClass("d-none");
                        $(".host-email").addClass("d-block");
                        $(".gmail-email").removeClass("d-block");
                        $(".gmail-email").addClass("d-none");
                    }
                    if (value == 2) {
                        $(".gmail-email").removeClass("d-none");
                        $(".gmail-email").addClass("d-block");
                        $(".host-email").removeClass("d-block");
                        $(".host-email").addClass("d-none");
                    }
                })
            })
        </script>
    </div>
@endsection
