<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('uploads/'.$favicon->photo)}}" rel="shortcut icon" type="image/x-icon" />
    <title>Administrator</title>
    <!-- CSS -->

    <link href="../client/assets/fontawesome512/all-admin.css" rel="stylesheet">
    <link href="../client/assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/sweetalert2/sweetalert2.css" rel="stylesheet">
    <link href="assets/select2/select2.css" rel="stylesheet">
    <link href="assets/sumoselect/sumoselect.css" rel="stylesheet">
    <link href="assets/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
    <link href="assets/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/rangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="assets/filer/jquery.filer.css" rel="stylesheet">
    <link href="assets/filer/jquery.filer-dragdropbox-theme.css" rel="stylesheet">
    <link href="assets/holdon/HoldOn.css" rel="stylesheet">
    <link href="assets/css/adminlte.css" rel="stylesheet">
    <link href="assets/css/adminlte-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/sweetalert2/sweetalert2.js"></script>
    <script src="assets/select2/select2.full.js"></script>
    <script src="assets/sumoselect/jquery.sumoselect.js"></script>
    <script src="assets/datetimepicker/php-date-formatter.min.js"></script>
    <script src="assets/datetimepicker/jquery.mousewheel.js"></script>
    <script src="assets/datetimepicker/jquery.datetimepicker.js"></script>
    <script src="assets/daterangepicker/daterangepicker.js"></script>
    <script src="assets/rangeSlider/ion.rangeSlider.js"></script>
    <script src="assets/js/priceFormat.js"></script>
    <script src="assets/jscolor/jscolor.js"></script>
    <script src="assets/filer/jquery.filer.js"></script>
    <script src="assets/holdon/HoldOn.js"></script>
    <script src="assets/sortable/Sortable.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/adminlte.js"></script>
    <!-- Ckeditor - Elfinder -->
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.editorConfig = function(config) {
            /* Config General */
            config.language = 'vi';
            config.skin = 'moono-lisa';
            config.width = 'auto';
            config.height = 620;
            /* Allow element */
            config.allowedContent = true;
            /* Entities */
            config.entities = false;
            config.entities_latin = false;
            config.entities_greek = false;
            config.basicEntities = false;
            /* Config CSS */
            config.contentsCss = [
                '/admin/ckeditor/contents.css'
            ];
            /* All Plugins */
            config.extraPlugins =
                'texttransform,copyformatting,html5video,html5audio,flash,youtube,wordcount,tableresize,widget,lineutils,clipboard,dialog,dialogui,widgetselection,lineheight,video,videodetector';
            /* Config Lineheight */
            config.line_height = '1;1.1;1.2;1.3;1.4;1.5;2;2.5;3;3.5;4;4.5;5';
            /* Config Word */
            config.pasteFromWordRemoveFontStyles = false;
            config.pasteFromWordRemoveStyles = false;
            /* Config ELFinder */
            config.filebrowserBrowseUrl = 'elfinder/index.php';
            /* Config ToolBar */
            config.toolbar = [{
                    name: 'document',
                    items: ['Source', '-', 'NewPage', 'Preview', 'Print', '-', 'Templates']
                },
                {
                    name: 'clipboard',
                    items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', 'PasteFromExcel', '-', 'Undo',
                        'Redo'
                    ]
                },
                {
                    name: 'editing',
                    items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
                },
                {
                    name: 'forms',
                    items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                        'HiddenField'
                    ]
                },
                '/',
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-',
                        'CopyFormatting', 'RemoveFormat'
                    ]
                },
                {
                    name: 'texttransform',
                    items: ['TransformTextToUppercase', 'TransformTextToLowercase', 'TransformTextCapitalize',
                        'TransformTextSwitcher'
                    ]
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote',
                        'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-',
                        'BidiLtr', 'BidiRtl', 'Language'
                    ]
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink', 'Anchor']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Flash', 'Youtube', 'VideoDetector', 'Html5video', 'Video', 'Html5audio',
                        'Iframe', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'
                    ]
                },
                '/',
                {
                    name: 'styles',
                    items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize', 'ShowBlocks']
                },
                {
                    name: 'about',
                    items: ['About']
                }
            ];
            /* Config StylesSet */
            config.stylesSet = [{
                    name: 'Font Seguoe Regular',
                    element: 'span',
                    attributes: {
                        'class': 'segui'
                    }
                },
                {
                    name: 'Font Seguoe Semibold',
                    element: 'span',
                    attributes: {
                        'class': 'seguisb'
                    }
                },
                {
                    name: 'Italic title',
                    element: 'span',
                    styles: {
                        'font-style': 'italic'
                    }
                },
                {
                    name: 'Special Container',
                    element: 'div',
                    styles: {
                        'background': '#eee',
                        'border': '1px solid #ccc',
                        'padding': '5px 10px'
                    }
                },
                {
                    name: 'Big',
                    element: 'big'
                },
                {
                    name: 'Small',
                    element: 'small'
                },
                {
                    name: 'Inline ',
                    element: 'q'
                },
                {
                    name: 'marker',
                    element: 'span',
                    attributes: {
                        'class': 'marker'
                    }
                }
            ];
            /* Config Wordcount */
            config.wordcount = {
                showParagraphs: true,
                showWordCount: true,
                showCharCount: true,
                countSpacesAsChars: false,
                countHTML: false,
                filter: new CKEDITOR.htmlParser.filter({
                    elements: {
                        div: function(element) {
                            if (element.attributes.class == 'mediaembed') {
                                return false;
                            }
                        }
                    }
                })
            };
        };
    </script>
</head>

<body class="sidebar-mini hold-transition text-sm login-page">

    <div class="login-view-website text-sm"><a href="{{route('client.home')}}" target="_blank" title="Xem website">Xem website</a></div>
    <div class="login-box">
        <div class="card">
            <p class="">username: <strong>admin</strong></p>
            <p class="">password: <strong>AbxFighting%</strong></p>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Đăng nhập hệ thống</p>
                <form enctype="multipart/form-data" id ='frm' method="POST" action="{{ route('postlogin') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append login-input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user" @error('username') {{ 'style=color:red;' }} @enderror></span>
                            </div>
                        </div>
                        <input type="text" class="form-control text-sm" name="username" id="username"
                            placeholder="Tài khoản *" autocomplete="off" value="{{ old('username') }}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append login-input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock" @error('password') {{ 'style=color:red;' }} @enderror></span>
                            </div>
                        </div>
                        <input type="password" class="form-control text-sm" name="password" id="password"
                            placeholder="Mật khẩu *" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text show-password">
                                <span class="fas fa-eye"></span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm bg-gradient-danger btn-block btn-login text-sm p-2">
                        <div class="sk-chase d-none">
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                        </div>
                        <span>Đăng nhập</span>
                    </button>
                    @if ($errors->any())
                        <div class="alert my-alert alert-login text-sm p-2 mb-0 mt-2 alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <p class="" style="line-hight:37px;">* {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    {{-- <p class="forgotPassword" style="float:right;margin-top:5px">
                        <a  href="index.php?com=user&act=forgot">
                            <i class="fas fa-question-circle"></i> Quên mật khẩu
                        </a>
                    </p> --}}
                </form>
            </div>
        </div>
    </div>

    <!-- Login js -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#username, #password").keypress(function(event) {
                if (event.keyCode == 13 || event.which == 13) login();
            })
            $(".btn-login").click(function() {
                $('#frm').submit();
            })
            $(".show-password").click(function() {
                if ($("#password").val()) {
                    if ($(this).hasClass("active")) {
                        $(this).removeClass("active");
                        $("#password").attr("type", "password");
                    } else {
                        $(this).addClass("active");
                        $("#password").attr("type", "text");
                    }
                    $(this).find("span").toggleClass("fas fa-eye fas fa-eye-slash");
                }
            })
        })
    </script>
