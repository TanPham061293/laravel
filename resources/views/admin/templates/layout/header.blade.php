<nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu"
                href=""><i
                    class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item nav-item-hello d-sm-inline-block">
            <a class="nav-link"><span class="text-split">Xin chào, {{session('loginAdmin')['username']}}!</span></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications -->
        <li class="nav-item d-sm-inline-block">
            <a href="{{route('client.product')}}" target="_blank" class="nav-link"><i
                    class="fas fa-reply"></i></a>
        </li>
        {{-- <li class="nav-item dropdown">
            <a id="dropdownSubMenu-info"
                href="http://localhost/caphemocnauedit/admin/index.php?com=product&amp;act=man_list&amp;type=san-pham#"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i
                    class="fas fa-cogs"></i></a>
            <ul aria-labelledby="dropdownSubMenu-info" class="dropdown-menu dropdown-menu-right border-0 shadow">
                <li>
                    <a href="http://localhost/caphemocnauedit/admin/index.php?com=user&amp;act=admin_edit"
                        class="dropdown-item">
                        <i class="fas fa-user-cog"></i>
                        <span>Thông tin admin</span>
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="http://localhost/caphemocnauedit/admin/index.php?com=user&amp;act=admin_edit&amp;changepass=1"
                        class="dropdown-item">
                        <i class="fas fa-key"></i>
                        <span>Đổi mật khẩu</span>
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="http://localhost/caphemocnauedit/admin/index.php?com=cache&amp;act=delete"
                        class="dropdown-item">
                        <i class="far fa-trash-alt"></i>
                        <span>Xóa bộ nhớ tạm</span>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown"
                href="http://localhost/caphemocnauedit/admin/index.php?com=product&amp;act=man_list&amp;type=san-pham#">
                <i class="fas fa-bell"></i>
                <span class="badge badge-danger">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow">
                <span class="dropdown-item dropdown-header p-0">Thông báo</span>
                <div class="dropdown-divider"></div>
                <a
                    href="http://localhost/cap<a href="Administrator%20-%20TIE%CC%82U%20%C4%90E%CC%82%CC%80%20SETTING.html">Administrator
                    - TIÊU ĐỀ SETTING</a>hemocnauedit/admin/index.php?com=contact&amp;act=man" class="dropdown-item"><i
                    class="fas fa-envelope mr-2"></i><span class="badge badge-danger mr-1">1</span> Liên hệ</a>
                <div class="dropdown-divider"></div>
                <a href="http://localhost/caphemocnauedit/admin/index.php?com=order&amp;act=man"
                    class="dropdown-item"><i class="fas fa-shopping-bag mr-2"></i><span
                        class="badge badge-danger mr-1">1</span> Đơn hàng</a>
                <a href="Administrator%20-%20TIE%CC%82U%20%C4%90E%CC%82%CC%80%20SETTING.html">Administrator - TIÊU ĐỀ
                    SETTING</a>
                <div class="dropdown-divider"></div>
                <a href="http://localhost/caphemocnauedit/admin/index.php?com=newsletter&amp;act=man&amp;type=dangkybaogia"
                    class="dropdown-item"><i class="fas fa-mail-bulk mr-2"></i><span
                        class="badge badge-danger mr-1">0</span> Đăng ký báo giá</a>
                <div class="dropdown-divider"></div>
            </div>
        </li> --}}
        <li class="nav-item d-sm-inline-block">
            <a href="{{route('logout')}}" class="nav-link"><i
                    class="fas fa-sign-out-alt mr-1"></i>Đăng xuất</a>
        </li>
    </ul>
</nav>
