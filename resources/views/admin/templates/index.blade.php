
@extends('admin.templates.layout.layout')

<!-- Main content -->
@section('content')
    <div class="content-wrapper" style="min-height: 594.047px;">
        <!-- Main content -->
        <section class="content mb-3">
            <div class="container-fluid">
                <h5 class="pt-3 pb-2">Dashboard</h5>
                <div class="row mb-2 text-sm">
                    <div class="col-12 col-sm-6 col-md-3">
                        <a class="my-info-box info-box"
                            href="http://localhost/caphemocnauedit/admin/index.php?com=setting&amp;act=capnhat"
                            title="Cấu hình website">
                            <span class="my-info-box-icon info-box-icon bg-primary"><i class="fas fa-cogs"></i></span>
                            <div class="info-box-content text-dark">
                                <span class="info-box-text text-capitalize">Cấu hình website</span>
                                <span class="info-box-number">View more</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <a class="my-info-box info-box"
                            href="http://localhost/caphemocnauedit/admin/index.php?com=user&amp;act=admin_edit"
                            title="Tài khoản">
                            <span class="my-info-box-icon info-box-icon bg-danger"><i class="fas fa-user-cog"></i></span>
                            <div class="info-box-content text-dark">
                                <span class="info-box-text text-capitalize">Tài khoản</span>
                                <span class="info-box-number">View more</span>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix hidden-md-up"></div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <a class="my-info-box info-box"
                            href="http://localhost/caphemocnauedit/admin/index.php?com=user&amp;act=admin_edit&amp;changepass=1"
                            title="Đổi mật khẩu">
                            <span class="my-info-box-icon info-box-icon bg-success"><i class="fas fa-key"></i></span>
                            <div class="info-box-content text-dark">
                                <span class="info-box-text text-capitalize">Đổi mật khẩu</span>
                                <span class="info-box-number">View more</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <a class="my-info-box info-box"
                            href="http://localhost/caphemocnauedit/admin/index.php?com=contact&amp;act=man"
                            title="Thư liên hệ">
                            <span class="my-info-box-icon info-box-icon bg-info"><i class="fas fa-address-book"></i></span>
                            <div class="info-box-content text-dark">
                                <span class="info-box-text text-capitalize">Thư liên hệ</span>
                                <span class="info-box-number">View more</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content pb-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Thống kê truy cập tháng 10/2023</h5>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <form class="form-filter-charts row align-items-center mb-1"
                            action="http://localhost/caphemocnauedit/admin/index.php" method="get" name="form-thongke"
                            accept-charset="utf-8">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control select2 select2-hidden-accessible" name="month"
                                        id="month" data-select2-id="month" tabindex="-1" aria-hidden="true">
                                        <option value="">Chọn tháng</option>
                                        <option value="1">Tháng 1</option>
                                        <option value="2">Tháng 2</option>
                                        <option value="3">Tháng 3</option>
                                        <option value="4">Tháng 4</option>
                                        <option value="5">Tháng 5</option>
                                        <option value="6">Tháng 6</option>
                                        <option value="7">Tháng 7</option>
                                        <option value="8">Tháng 8</option>
                                        <option value="9">Tháng 9</option>
                                        <option value="10" selected="" data-select2-id="2">Tháng 10</option>
                                        <option value="11">Tháng 11</option>
                                        <option value="12">Tháng 12</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: 481.656px;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false" aria-labelledby="select2-month-container"><span
                                                    class="select2-selection__rendered" id="select2-month-container"
                                                    role="textbox" aria-readonly="true" title="Tháng 10">Tháng
                                                    10</span><span class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control select2 select2-hidden-accessible" name="year"
                                        id="year" data-select2-id="year" tabindex="-1" aria-hidden="true">
                                        <option value="">Chọn năm</option>
                                        <option value="2000">Năm 2000</option>
                                        <option value="2001">Năm 2001</option>
                                        <option value="2002">Năm 2002</option>
                                        <option value="2003">Năm 2003</option>
                                        <option value="2004">Năm 2004</option>
                                        <option value="2005">Năm 2005</option>
                                        <option value="2006">Năm 2006</option>
                                        <option value="2007">Năm 2007</option>
                                        <option value="2008">Năm 2008</option>
                                        <option value="2009">Năm 2009</option>
                                        <option value="2010">Năm 2010</option>
                                        <option value="2011">Năm 2011</option>
                                        <option value="2012">Năm 2012</option>
                                        <option value="2013">Năm 2013</option>
                                        <option value="2014">Năm 2014</option>
                                        <option value="2015">Năm 2015</option>
                                        <option value="2016">Năm 2016</option>
                                        <option value="2017">Năm 2017</option>
                                        <option value="2018">Năm 2018</option>
                                        <option value="2019">Năm 2019</option>
                                        <option value="2020">Năm 2020</option>
                                        <option value="2021">Năm 2021</option>
                                        <option value="2022">Năm 2022</option>
                                        <option value="2023" selected="" data-select2-id="4">Năm 2023</option>
                                        <option value="2024">Năm 2024</option>
                                        <option value="2025">Năm 2025</option>
                                        <option value="2026">Năm 2026</option>
                                        <option value="2027">Năm 2027</option>
                                        <option value="2028">Năm 2028</option>
                                        <option value="2029">Năm 2029</option>
                                        <option value="2030">Năm 2030</option>
                                        <option value="2031">Năm 2031</option>
                                        <option value="2032">Năm 2032</option>
                                        <option value="2033">Năm 2033</option>
                                        <option value="2034">Năm 2034</option>
                                        <option value="2035">Năm 2035</option>
                                        <option value="2036">Năm 2036</option>
                                        <option value="2037">Năm 2037</option>
                                        <option value="2038">Năm 2038</option>
                                        <option value="2039">Năm 2039</option>
                                        <option value="2040">Năm 2040</option>
                                        <option value="2041">Năm 2041</option>
                                        <option value="2042">Năm 2042</option>
                                        <option value="2043">Năm 2043</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="3" style="width: 481.656px;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-year-container"><span
                                                    class="select2-selection__rendered" id="select2-year-container"
                                                    role="textbox" aria-readonly="true" title="Năm 2023">Năm
                                                    2023</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"><button type="submit" class="btn btn-success">Thống Kê</button>
                                </div>
                            </div>
                        </form>
                        <div id="apexMixedChart" style="min-height: 465px;">
                            <div id="apexchartsjdbho3z" class="apexcharts-canvas apexchartsjdbho3z light"
                                style="width: 1475px; height: 450px;"><svg id="SvgjsSvg1006" width="1475"
                                    height="450" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(49.25, 30)">
                                        <defs id="SvgjsDefs1007">
                                            <clippath id="gridRectMaskjdbho3z">
                                                <rect id="SvgjsRect1013" width="1408.7421875" height="382.348" x="-2.5"
                                                    y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clippath>
                                            <clippath id="gridRectMarkerMaskjdbho3z">
                                                <rect id="SvgjsRect1014" width="1407.7421875" height="381.348" x="-2"
                                                    y="-2" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clippath>
                                            <filter id="SvgjsFilter1083" filterUnits="userSpaceOnUse">
                                                <feflood id="SvgjsFeFlood1084" flood-color="#000000" flood-opacity="0.2"
                                                    result="SvgjsFeFlood1084Out" in="SourceGraphic"></feflood>
                                                <fecomposite id="SvgjsFeComposite1085" in="SvgjsFeFlood1084Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite1085Out">
                                                </fecomposite>
                                                <feoffset id="SvgjsFeOffset1086" dx="7" dy="18"
                                                    result="SvgjsFeOffset1086Out" in="SvgjsFeComposite1085Out"></feoffset>
                                                <fegaussianblur id="SvgjsFeGaussianBlur1087" stdDeviation="20 "
                                                    result="SvgjsFeGaussianBlur1087Out" in="SvgjsFeOffset1086Out">
                                                </fegaussianblur>
                                                <femerge id="SvgjsFeMerge1088" result="SvgjsFeMerge1088Out"
                                                    in="SourceGraphic">
                                                    <femergenode id="SvgjsFeMergeNode1089"
                                                        in="SvgjsFeGaussianBlur1087Out"></femergenode>
                                                    <femergenode id="SvgjsFeMergeNode1090" in="[object Arguments]">
                                                    </femergenode>
                                                </femerge>
                                                <feblend id="SvgjsFeBlend1091" in="SourceGraphic"
                                                    in2="SvgjsFeMerge1088Out" mode="normal"
                                                    result="SvgjsFeBlend1091Out"></feblend>
                                            </filter>
                                        </defs>
                                        <line id="SvgjsLine1012" x1="186.665625" y1="0" x2="186.665625"
                                            y2="377.348" stroke="#b6b6b6" stroke-dasharray="3"
                                            class="apexcharts-xcrosshairs active" x="186.665625" y="0" width="1"
                                            height="377.348" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG1092" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1093" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1094"
                                                    font-family="Helvetica, Arial, sans-serif" x="0" y="406.348"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    fill="#373d3f" class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1095"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D1</tspan>
                                                    <title>D1</title>
                                                </text><text id="SvgjsText1096" font-family="Helvetica, Arial, sans-serif"
                                                    x="46.79140625000001" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1097"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D2</tspan>
                                                    <title>D2</title>
                                                </text><text id="SvgjsText1098" font-family="Helvetica, Arial, sans-serif"
                                                    x="93.5828125" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1099"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D3</tspan>
                                                    <title>D3</title>
                                                </text><text id="SvgjsText1100" font-family="Helvetica, Arial, sans-serif"
                                                    x="140.37421874999998" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1101"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D4</tspan>
                                                    <title>D4</title>
                                                </text><text id="SvgjsText1102" font-family="Helvetica, Arial, sans-serif"
                                                    x="187.16562499999998" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1103"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D5</tspan>
                                                    <title>D5</title>
                                                </text><text id="SvgjsText1104" font-family="Helvetica, Arial, sans-serif"
                                                    x="233.95703125" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1105"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D6</tspan>
                                                    <title>D6</title>
                                                </text><text id="SvgjsText1106" font-family="Helvetica, Arial, sans-serif"
                                                    x="280.7484375" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1107"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D7</tspan>
                                                    <title>D7</title>
                                                </text><text id="SvgjsText1108" font-family="Helvetica, Arial, sans-serif"
                                                    x="327.53984375000005" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1109"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D8</tspan>
                                                    <title>D8</title>
                                                </text><text id="SvgjsText1110" font-family="Helvetica, Arial, sans-serif"
                                                    x="374.33125000000007" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1111"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D9</tspan>
                                                    <title>D9</title>
                                                </text><text id="SvgjsText1112" font-family="Helvetica, Arial, sans-serif"
                                                    x="421.1226562500001" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1113"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D10</tspan>
                                                    <title>D10</title>
                                                </text><text id="SvgjsText1114" font-family="Helvetica, Arial, sans-serif"
                                                    x="467.9140625000001" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1115"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D11</tspan>
                                                    <title>D11</title>
                                                </text><text id="SvgjsText1116" font-family="Helvetica, Arial, sans-serif"
                                                    x="514.7054687500001" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1117"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D12</tspan>
                                                    <title>D12</title>
                                                </text><text id="SvgjsText1118" font-family="Helvetica, Arial, sans-serif"
                                                    x="561.4968750000002" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1119"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D13</tspan>
                                                    <title>D13</title>
                                                </text><text id="SvgjsText1120" font-family="Helvetica, Arial, sans-serif"
                                                    x="608.2882812500002" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1121"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D14</tspan>
                                                    <title>D14</title>
                                                </text><text id="SvgjsText1122" font-family="Helvetica, Arial, sans-serif"
                                                    x="655.0796875000002" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1123"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D15</tspan>
                                                    <title>D15</title>
                                                </text><text id="SvgjsText1124" font-family="Helvetica, Arial, sans-serif"
                                                    x="701.8710937500002" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1125"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D16</tspan>
                                                    <title>D16</title>
                                                </text><text id="SvgjsText1126" font-family="Helvetica, Arial, sans-serif"
                                                    x="748.6625000000003" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1127"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D17</tspan>
                                                    <title>D17</title>
                                                </text><text id="SvgjsText1128" font-family="Helvetica, Arial, sans-serif"
                                                    x="795.4539062500003" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1129"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D18</tspan>
                                                    <title>D18</title>
                                                </text><text id="SvgjsText1130" font-family="Helvetica, Arial, sans-serif"
                                                    x="842.2453125000003" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1131"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D19</tspan>
                                                    <title>D19</title>
                                                </text><text id="SvgjsText1132" font-family="Helvetica, Arial, sans-serif"
                                                    x="889.0367187500003" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1133"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D20</tspan>
                                                    <title>D20</title>
                                                </text><text id="SvgjsText1134" font-family="Helvetica, Arial, sans-serif"
                                                    x="935.8281250000003" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1135"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D21</tspan>
                                                    <title>D21</title>
                                                </text><text id="SvgjsText1136" font-family="Helvetica, Arial, sans-serif"
                                                    x="982.6195312500004" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1137"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D22</tspan>
                                                    <title>D22</title>
                                                </text><text id="SvgjsText1138" font-family="Helvetica, Arial, sans-serif"
                                                    x="1029.4109375000003" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1139"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D23</tspan>
                                                    <title>D23</title>
                                                </text><text id="SvgjsText1140" font-family="Helvetica, Arial, sans-serif"
                                                    x="1076.2023437500002" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1141"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D24</tspan>
                                                    <title>D24</title>
                                                </text><text id="SvgjsText1142" font-family="Helvetica, Arial, sans-serif"
                                                    x="1122.99375" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1143"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D25</tspan>
                                                    <title>D25</title>
                                                </text><text id="SvgjsText1144" font-family="Helvetica, Arial, sans-serif"
                                                    x="1169.78515625" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1145"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D26</tspan>
                                                    <title>D26</title>
                                                </text><text id="SvgjsText1146" font-family="Helvetica, Arial, sans-serif"
                                                    x="1216.5765625" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1147"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D27</tspan>
                                                    <title>D27</title>
                                                </text><text id="SvgjsText1148" font-family="Helvetica, Arial, sans-serif"
                                                    x="1263.3679687499998" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1149"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D28</tspan>
                                                    <title>D28</title>
                                                </text><text id="SvgjsText1150" font-family="Helvetica, Arial, sans-serif"
                                                    x="1310.1593749999997" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1151"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D29</tspan>
                                                    <title>D29</title>
                                                </text><text id="SvgjsText1152" font-family="Helvetica, Arial, sans-serif"
                                                    x="1356.9507812499996" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1153"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D30</tspan>
                                                    <title>D30</title>
                                                </text><text id="SvgjsText1154" font-family="Helvetica, Arial, sans-serif"
                                                    x="1403.7421874999995" y="406.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" fill="#373d3f"
                                                    class="apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1155"
                                                        style="font-family: Helvetica, Arial, sans-serif;">D31</tspan>
                                                    <title>D31</title>
                                                </text></g>
                                            <line id="SvgjsLine1156" x1="0" y1="378.348" x2="1403.7421875"
                                                y2="378.348" stroke="#78909c" stroke-dasharray="0" stroke-width="1">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1165" class="apexcharts-grid">
                                            <g id="SvgjsG1166" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1197" x1="0" y1="0" x2="1403.7421875"
                                                    y2="0" stroke="#e7e7e7" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1198" x1="0" y1="75.4696" x2="1403.7421875"
                                                    y2="75.4696" stroke="#e7e7e7" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1199" x1="0" y1="150.9392" x2="1403.7421875"
                                                    y2="150.9392" stroke="#e7e7e7" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1200" x1="0" y1="226.40879999999999"
                                                    x2="1403.7421875" y2="226.40879999999999" stroke="#e7e7e7"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1201" x1="0" y1="301.8784" x2="1403.7421875"
                                                    y2="301.8784" stroke="#e7e7e7" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1202" x1="0" y1="377.348" x2="1403.7421875"
                                                    y2="377.348" stroke="#e7e7e7" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1167" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1168" x1="46.79140625" y1="378.348" x2="46.79140625"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1169" x1="93.5828125" y1="378.348" x2="93.5828125"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1170" x1="140.37421875" y1="378.348" x2="140.37421875"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1171" x1="187.165625" y1="378.348" x2="187.165625"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1172" x1="233.95703125" y1="378.348" x2="233.95703125"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1173" x1="280.7484375" y1="378.348" x2="280.7484375"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1174" x1="327.53984375000005" y1="378.348"
                                                x2="327.53984375000005" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1175" x1="374.33125000000007" y1="378.348"
                                                x2="374.33125000000007" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1176" x1="421.1226562500001" y1="378.348"
                                                x2="421.1226562500001" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1177" x1="467.9140625000001" y1="378.348"
                                                x2="467.9140625000001" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1178" x1="514.7054687500001" y1="378.348"
                                                x2="514.7054687500001" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1179" x1="561.4968750000002" y1="378.348"
                                                x2="561.4968750000002" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1180" x1="608.2882812500002" y1="378.348"
                                                x2="608.2882812500002" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1181" x1="655.0796875000002" y1="378.348"
                                                x2="655.0796875000002" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1182" x1="701.8710937500002" y1="378.348"
                                                x2="701.8710937500002" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1183" x1="748.6625000000003" y1="378.348"
                                                x2="748.6625000000003" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1184" x1="795.4539062500003" y1="378.348"
                                                x2="795.4539062500003" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1185" x1="842.2453125000003" y1="378.348"
                                                x2="842.2453125000003" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1186" x1="889.0367187500003" y1="378.348"
                                                x2="889.0367187500003" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1187" x1="935.8281250000003" y1="378.348"
                                                x2="935.8281250000003" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1188" x1="982.6195312500004" y1="378.348"
                                                x2="982.6195312500004" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1189" x1="1029.4109375000003" y1="378.348"
                                                x2="1029.4109375000003" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1190" x1="1076.2023437500002" y1="378.348"
                                                x2="1076.2023437500002" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1191" x1="1122.99375" y1="378.348" x2="1122.99375"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1192" x1="1169.78515625" y1="378.348"
                                                x2="1169.78515625" y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1193" x1="1216.5765625" y1="378.348" x2="1216.5765625"
                                                y2="384.348" stroke="#78909c" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1194" x1="1263.3679687499998" y1="378.348"
                                                x2="1263.3679687499998" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1195" x1="1310.1593749999997" y1="378.348"
                                                x2="1310.1593749999997" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1196" x1="1356.9507812499996" y1="378.348"
                                                x2="1356.9507812499996" y2="384.348" stroke="#78909c"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <rect id="SvgjsRect1203" width="1403.7421875" height="75.4696" x="0" y="0"
                                                rx="0" ry="0" fill="#f3f3f3" opacity="0.5"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-gridRow"></rect>
                                            <rect id="SvgjsRect1204" width="1403.7421875" height="75.4696" x="0"
                                                y="75.4696" rx="0" ry="0" fill="transparent"
                                                opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-gridRow"></rect>
                                            <rect id="SvgjsRect1205" width="1403.7421875" height="75.4696" x="0"
                                                y="150.9392" rx="0" ry="0" fill="#f3f3f3" opacity="0.5"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-gridRow"></rect>
                                            <rect id="SvgjsRect1206" width="1403.7421875" height="75.4696" x="0"
                                                y="226.40879999999999" rx="0" ry="0" fill="transparent"
                                                opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-gridRow"></rect>
                                            <rect id="SvgjsRect1207" width="1403.7421875" height="75.4696" x="0"
                                                y="301.8784" rx="0" ry="0" fill="#f3f3f3" opacity="0.5"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-gridRow"></rect>
                                            <line id="SvgjsLine1209" x1="0" y1="377.348" x2="1403.7421875"
                                                y2="377.348" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1208" x1="0" y1="1" x2="0"
                                                y2="377.348" stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1016" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1017" class="apexcharts-series"
                                                seriesName="Thốngxkêxtruyxcậpxthángx10" data:longestSeries="true"
                                                rel="1" data:realIndex="0">
                                                <path id="undefined-0"
                                                    d="M0 352.19146666666666C16.3769921875 352.19146666666666 30.4144140625 276.7218666666667 46.79140625 276.7218666666667C63.1683984375 276.7218666666667 77.20582031250001 327.03493333333336 93.5828125 327.03493333333336C109.9598046875 327.03493333333336 123.99722656249999 192.86675555555556 140.37421874999998 192.86675555555556C156.7512109375 192.86675555555556 170.7886328125 150.9392 187.165625 150.9392C203.5426171875 150.9392 217.5800390625 201.25226666666669 233.95703125 201.25226666666669C250.33402343749998 201.25226666666669 264.3714453125 377.348 280.74843749999997 377.348C297.12542968749995 377.348 311.1628515625 343.80595555555556 327.53984375 343.80595555555556C343.91683593749997 343.80595555555556 357.95425781250003 125.78266666666667 374.33125 125.78266666666667C390.7082421875 125.78266666666667 404.7456640625 83.85511111111111 421.12265625 83.85511111111111C437.4996484375 83.85511111111111 451.53707031249996 159.32471111111113 467.9140625 159.32471111111113C484.29105468750004 159.32471111111113 498.3284765625 58.698577777777814 514.70546875 58.698577777777814C531.0824609375 58.698577777777814 545.1198828125 226.4088 561.4968749999999 226.4088C577.8738671875 226.4088 591.9112890624999 243.17982222222224 608.28828125 243.17982222222224C624.6652734375 243.17982222222224 638.7026953124999 377.348 655.0796875 377.348C671.4566796875 377.348 685.4941015625 125.78266666666667 701.87109375 125.78266666666667C718.2480859375 125.78266666666667 732.2855078125 259.95084444444444 748.6625 259.95084444444444C765.0394921875 259.95084444444444 779.0769140625 377.348 795.4539062499999 377.348C811.8308984375 377.348 825.8683203124999 377.348 842.2453125 377.348C858.6223046875 377.348 872.6597265624999 377.348 889.03671875 377.348C905.4137109375 377.348 919.4511328125 343.80595555555556 935.828125 343.80595555555556C952.2051171874999 343.80595555555556 966.2425390625 201.25226666666669 982.6195312499999 201.25226666666669C998.9965234375 201.25226666666669 1013.0339453125 343.80595555555556 1029.4109375 343.80595555555556C1045.7879296875 343.80595555555556 1059.8253515625 377.348 1076.20234375 377.348C1092.5793359375 377.348 1106.6167578124998 377.348 1122.9937499999999 377.348C1139.3707421875 377.348 1153.4081640625 352.19146666666666 1169.78515625 352.19146666666666C1186.1621484375 352.19146666666666 1200.1995703124999 368.9624888888889 1216.5765625 368.9624888888889C1232.9535546875 368.9624888888889 1246.9909765625 377.348 1263.36796875 377.348C1279.7449609375 377.348 1293.7823828125 377.348 1310.159375 377.348C1326.5363671875 377.348 1340.5737890624998 377.348 1356.9507812499999 377.348C1373.3277734375 377.348 1387.3651953125 377.348 1403.7421875 377.348C1403.7421875 377.348 1403.7421875 377.348 1403.7421875 377.348 "
                                                    fill="none" fill-opacity="1" stroke="rgba(60,141,188,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskjdbho3z)" filter="url(#SvgjsFilter1083)"
                                                    pathTo="M 0 352.19146666666666C 16.3769921875 352.19146666666666 30.4144140625 276.7218666666667 46.79140625 276.7218666666667C 63.1683984375 276.7218666666667 77.20582031250001 327.03493333333336 93.5828125 327.03493333333336C 109.9598046875 327.03493333333336 123.99722656249999 192.86675555555556 140.37421874999998 192.86675555555556C 156.7512109375 192.86675555555556 170.7886328125 150.9392 187.165625 150.9392C 203.5426171875 150.9392 217.5800390625 201.25226666666669 233.95703125 201.25226666666669C 250.33402343749998 201.25226666666669 264.3714453125 377.348 280.74843749999997 377.348C 297.12542968749995 377.348 311.1628515625 343.80595555555556 327.53984375 343.80595555555556C 343.91683593749997 343.80595555555556 357.95425781250003 125.78266666666667 374.33125 125.78266666666667C 390.7082421875 125.78266666666667 404.7456640625 83.85511111111111 421.12265625 83.85511111111111C 437.4996484375 83.85511111111111 451.53707031249996 159.32471111111113 467.9140625 159.32471111111113C 484.29105468750004 159.32471111111113 498.3284765625 58.698577777777814 514.70546875 58.698577777777814C 531.0824609375 58.698577777777814 545.1198828125 226.4088 561.4968749999999 226.4088C 577.8738671875 226.4088 591.9112890624999 243.17982222222224 608.28828125 243.17982222222224C 624.6652734375 243.17982222222224 638.7026953124999 377.348 655.0796875 377.348C 671.4566796875 377.348 685.4941015625 125.78266666666667 701.87109375 125.78266666666667C 718.2480859375 125.78266666666667 732.2855078125 259.95084444444444 748.6625 259.95084444444444C 765.0394921875 259.95084444444444 779.0769140625 377.348 795.4539062499999 377.348C 811.8308984375 377.348 825.8683203124999 377.348 842.2453125 377.348C 858.6223046875 377.348 872.6597265624999 377.348 889.03671875 377.348C 905.4137109375 377.348 919.4511328125 343.80595555555556 935.828125 343.80595555555556C 952.2051171874999 343.80595555555556 966.2425390625 201.25226666666669 982.6195312499999 201.25226666666669C 998.9965234375 201.25226666666669 1013.0339453125 343.80595555555556 1029.4109375 343.80595555555556C 1045.7879296875 343.80595555555556 1059.8253515625 377.348 1076.20234375 377.348C 1092.5793359375 377.348 1106.6167578124998 377.348 1122.9937499999999 377.348C 1139.3707421875 377.348 1153.4081640625 352.19146666666666 1169.78515625 352.19146666666666C 1186.1621484375 352.19146666666666 1200.1995703124999 368.9624888888889 1216.5765625 368.9624888888889C 1232.9535546875 368.9624888888889 1246.9909765625 377.348 1263.36796875 377.348C 1279.7449609375 377.348 1293.7823828125 377.348 1310.159375 377.348C 1326.5363671875 377.348 1340.5737890624998 377.348 1356.9507812499999 377.348C 1373.3277734375 377.348 1387.3651953125 377.348 1403.7421875 377.348"
                                                    pathFrom="M -1 377.348L -1 377.348L 46.79140625 377.348L 93.5828125 377.348L 140.37421874999998 377.348L 187.165625 377.348L 233.95703125 377.348L 280.74843749999997 377.348L 327.53984375 377.348L 374.33125 377.348L 421.12265625 377.348L 467.9140625 377.348L 514.70546875 377.348L 561.4968749999999 377.348L 608.28828125 377.348L 655.0796875 377.348L 701.87109375 377.348L 748.6625 377.348L 795.4539062499999 377.348L 842.2453125 377.348L 889.03671875 377.348L 935.828125 377.348L 982.6195312499999 377.348L 1029.4109375 377.348L 1076.20234375 377.348L 1122.9937499999999 377.348L 1169.78515625 377.348L 1216.5765625 377.348L 1263.36796875 377.348L 1310.159375 377.348L 1356.9507812499999 377.348L 1403.7421875 377.348">
                                                </path>
                                                <g id="SvgjsG1018" class="apexcharts-series-markers-wrap">
                                                    <g id="SvgjsG1020" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1021" r="1" cx="0"
                                                            cy="352.19146666666666" class="apexcharts-marker wqytq6y4p"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                            index="0" default-marker-size="1"></circle>
                                                        <circle id="SvgjsCircle1022" r="1" cx="46.79140625"
                                                            cy="276.7218666666667" class="apexcharts-marker w1hcrwc5r"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1023" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1024" r="1" cx="93.5828125"
                                                            cy="327.03493333333336" class="apexcharts-marker w6hqu856"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1025" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1026" r="1" cx="140.37421874999998"
                                                            cy="192.86675555555556" class="apexcharts-marker w5ss4j1u"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1027" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1028" r="7" cx="187.165625"
                                                            cy="150.9392" class="apexcharts-marker wc2ojfrnbl"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1029" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1030" r="1" cx="233.95703125"
                                                            cy="201.25226666666669" class="apexcharts-marker woy4bcfwk"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1031" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1032" r="1" cx="280.74843749999997"
                                                            cy="377.348" class="apexcharts-marker w8wdv0unli"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1033" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1034" r="1" cx="327.53984375"
                                                            cy="343.80595555555556" class="apexcharts-marker w3gpmcw24"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1035" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1036" r="1" cx="374.33125"
                                                            cy="125.78266666666667" class="apexcharts-marker wr4tfr0lhg"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="8" j="8"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1037" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1038" r="1" cx="421.12265625"
                                                            cy="83.85511111111111" class="apexcharts-marker wu03j0hgxk"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="9" j="9"
                                                            index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1039" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1040" r="1" cx="467.9140625"
                                                            cy="159.32471111111113" class="apexcharts-marker wx25shq6i"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="10"
                                                            j="10" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1041" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1042" r="1" cx="514.70546875"
                                                            cy="58.698577777777814" class="apexcharts-marker wsbgmde7f"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="11"
                                                            j="11" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1043" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1044" r="1" cx="561.4968749999999"
                                                            cy="226.4088" class="apexcharts-marker w0cnfuawn"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="12"
                                                            j="12" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1045" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1046" r="1" cx="608.28828125"
                                                            cy="243.17982222222224" class="apexcharts-marker warz78ct4"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="13"
                                                            j="13" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1047" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1048" r="1" cx="655.0796875"
                                                            cy="377.348" class="apexcharts-marker w8ng2buek"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="14"
                                                            j="14" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1049" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1050" r="1" cx="701.87109375"
                                                            cy="125.78266666666667" class="apexcharts-marker w9qpcweqq"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="15"
                                                            j="15" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1051" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1052" r="1" cx="748.6625"
                                                            cy="259.95084444444444" class="apexcharts-marker w3ja3r3w"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="16"
                                                            j="16" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1053" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1054" r="1" cx="795.4539062499999"
                                                            cy="377.348" class="apexcharts-marker wlm6fw8uk"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="17"
                                                            j="17" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1055" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1056" r="1" cx="842.2453125"
                                                            cy="377.348" class="apexcharts-marker wnamluoc5"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="18"
                                                            j="18" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1057" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1058" r="1" cx="889.03671875"
                                                            cy="377.348" class="apexcharts-marker wsfqmx7fr"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="19"
                                                            j="19" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1059" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1060" r="1" cx="935.828125"
                                                            cy="343.80595555555556" class="apexcharts-marker w3g42girz"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="20"
                                                            j="20" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1061" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1062" r="1" cx="982.6195312499999"
                                                            cy="201.25226666666669" class="apexcharts-marker wyvttr91yf"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="21"
                                                            j="21" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1063" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1064" r="1" cx="1029.4109375"
                                                            cy="343.80595555555556" class="apexcharts-marker w6aju73g4i"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="22"
                                                            j="22" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1065" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1066" r="1" cx="1076.20234375"
                                                            cy="377.348" class="apexcharts-marker w77ic6ys6"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="23"
                                                            j="23" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1067" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1068" r="1" cx="1122.9937499999999"
                                                            cy="377.348" class="apexcharts-marker way9lbcsg"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="24"
                                                            j="24" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1069" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1070" r="1" cx="1169.78515625"
                                                            cy="352.19146666666666" class="apexcharts-marker wlo731eol"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="25"
                                                            j="25" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1071" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1072" r="1" cx="1216.5765625"
                                                            cy="368.9624888888889" class="apexcharts-marker w1xw4r1hk"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="26"
                                                            j="26" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1073" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1074" r="1" cx="1263.36796875"
                                                            cy="377.348" class="apexcharts-marker w7qyi04au"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="27"
                                                            j="27" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1075" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1076" r="1" cx="1310.159375"
                                                            cy="377.348" class="apexcharts-marker wnfembdcl"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="28"
                                                            j="28" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1077" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1078" r="1" cx="1356.9507812499999"
                                                            cy="377.348" class="apexcharts-marker w98k1s8fg"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="29"
                                                            j="29" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                    <g id="SvgjsG1079" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskjdbho3z)">
                                                        <circle id="SvgjsCircle1080" r="1" cx="1403.7421875"
                                                            cy="377.348" class="apexcharts-marker wis6j2kq8"
                                                            stroke="#ffffff" fill="#3c8dbc" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="30"
                                                            j="30" index="0" default-marker-size="1"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1019" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1210" x1="0" y1="0" x2="1403.7421875"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1211" x1="0" y1="0" x2="1403.7421875"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1212" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1213" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1214" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1011" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" fill="#fefefe" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                    <g id="SvgjsG1157" class="apexcharts-yaxis" rel="0"
                                        transform="translate(16.25, 0)">
                                        <g id="SvgjsG1158" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1159"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">45</text><text
                                                id="SvgjsText1160" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="107.0696" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">36</text><text
                                                id="SvgjsText1161" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="182.6392" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">27</text><text
                                                id="SvgjsText1162" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="258.2088" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">18</text><text
                                                id="SvgjsText1163" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="333.7784" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">9</text><text
                                                id="SvgjsText1164" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="409.34799999999996" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">0</text></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light active" style="left: 248.25px; top: 153.5px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">D5</div>
                                    <div class="apexcharts-tooltip-series-group active" style="display: flex;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(60, 141, 188);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Thống kê truy cập tháng 10:
                                                </span><span class="apexcharts-tooltip-text-value">27</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light active"
                                    style="left: 215.963px; top: 409.348px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 17.9062px;">
                                        D5</div>
                                </div>
                                <div class="apexcharts-toolbar">
                                    <div class="apexcharts-menu-icon" title="Menu"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg></div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG
                                        </div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1516px; height: 564px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="./111_files/apexcharts.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var apexMixedChart;
                var options = {
                    colors: ['#3c8dbc'],
                    chart: {
                        id: 'apexMixedChart',
                        height: 450,
                        type: 'line',
                        dropShadow: {
                            enabled: true,
                            color: '#000',
                            top: 18,
                            left: 7,
                            blur: 20,
                            opacity: 0.2
                        }
                    },
                    series: [{
                        name: 'Thống kê truy cập tháng 10',
                        type: 'line',
                        data: [
                            3,
                            12,
                            6,
                            22,
                            27,
                            21,
                            0,
                            4,
                            30,
                            35,
                            26,
                            38,
                            18,
                            16,
                            0,
                            30,
                            14,
                            0,
                            0,
                            0,
                            4,
                            21,
                            4,
                            0,
                            0,
                            3,
                            1,
                            0,
                            0,
                            0,
                            0,
                        ]
                    }],
                    stroke: {
                        curve: 'smooth'
                    },
                    grid: {
                        borderColor: '#e7e7e7',
                        row: {
                            colors: ['#f3f3f3', 'transparent'],
                            opacity: 0.5
                        },
                    },
                    markers: {
                        size: 1
                    },
                    dataLabels: {
                        enabled: false
                    },
                    labels: [
                        'D1',
                        'D2',
                        'D3',
                        'D4',
                        'D5',
                        'D6',
                        'D7',
                        'D8',
                        'D9',
                        'D10',
                        'D11',
                        'D12',
                        'D13',
                        'D14',
                        'D15',
                        'D16',
                        'D17',
                        'D18',
                        'D19',
                        'D20',
                        'D21',
                        'D22',
                        'D23',
                        'D24',
                        'D25',
                        'D26',
                        'D27',
                        'D28',
                        'D29',
                        'D30',
                        'D31',
                    ],
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        floating: true,
                        offsetY: -25,
                        offsetX: -5
                    }
                }
                apexMixedChart = new ApexCharts(document.querySelector("#apexMixedChart"), options);
                apexMixedChart.render();
            })
        </script>
    </div>
@endsection
