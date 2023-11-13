<div class="_foot">
    <div class="pagewrap">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="_dmfootchinh">
                    <div class="_dmfoot">Liên hệ với chúng tôi</div>
                </div>
                <div class="_add-foot">
                    {{isset($footer->noidungvi) ? Str::of($footer->noidungvi)->toHtmlString() :''}}
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-right-0 padding-left-0">
                <div class="_dmfoot">Fanpage - Facebook</div>
                <div id="fanpage-facebook"></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-left-60">
                <div class="_dmfoot">Bản đồ</div>
                <div class="khung_map">
                    <iframe
                        src=""
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="_bgcpr">
    <div class="pagewrap">
        <div class="row">
            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <div class="_copyright">Copyright © 2020 TIÊU ĐỀ SETTING. </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <div class="_thongke">
                    <ul class="list-inline margin-bottom-0">
                        <li>Online: 1</li>
                        <li>Truy cập tháng: 7</li>
                        <li>Tổng: 11272</li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</div>


<div class="call-now-button ui-draggable ui-draggable-handle" id="draggable">
    <div>
        <a href="tel:0333434738" id="quickcallbutton" title="Call Now">
            <div class="quick-alo-ph-circle active"></div>
            <div class="quick-alo-ph-circle-fill active"></div>
            <div class="quick-alo-phone-img-circle shake"></div>
        </a>
    </div>
</div>

<!-- <div class="fb-livechat"> -->
{{-- <div id="messages-facebook">
    <div id="messages-facebook"></div>
</div> --}}
<!-- </div> -->
{{-- <div class="chat_zalo">
    <a href="https://zalo.me/0982287478" target="_blank"><img src="assets/images/zalo.png" width="60px"
            alt="zalo"></a>
</div> --}}

{{-- <div class="modal " id="myCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Giỏ Hàng Của Bạn</h4>
            </div>
            <div id="cartResult">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="_cartheader">
    <a class="_iconcart" href="javascript:addCart_Qty();">
        <img src="assets/images/iconcart.png" alt="Giỏ hàng"><span class="_count">0</span>
    </a>
</div> --}}
