@extends('client.templates.layout.layout')
@section('content')
    <div class="site-index">
        <div class="_pageOne">
            <div class="pagewrap">
                <div class="row">
                    <div class="col-md-4">
                        <div class="_bg-pageOne">
                            <div>
                                <div class="_box-namePage">
                                    <div class="_namePage"><a href="gioi-thieu" title="Giới Thiệu">Giới
                                            Thiệu</a></div>
                                    <div class="nametitle">{{ $introduce->tenvi }}</div>
                                </div>
                                <div class="_desPage">
                                    {{ Str::of($introduce->noidungvi)->toHtmlString() }}
                                </div>
                                <div class="xemthem"><a href="gioi-thieu">Xem thêm >></a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 align-items-start">
                        <div class="hinh_gt">
                            <img src="{{ asset('uploads/static/' . $introduce->photo) }}"
                                onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';" alt="Giới Thiệu" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-bottom-30"></div>
        <div class="khung_banner">
            <div class="pagewrap">
                <div class="owl-carousel owl-theme owl-carousel3-brands">
                    @if (isset($item_list_nb) && count($item_list_nb) > 0)
                        @foreach ($item_list_nb as $k => $v)
                            <div class="hinh_banner">
                                <a href="/san-pham/list/{{ $v->tenkhongdauvi }}" title="{{ $v->tenvi }}">
                                    <img src="{{ asset('uploads/' . $v->photo) }}"
                                        onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"
                                        alt="{{ $v->tenvi }}" /></a>
                                <div class="name_banner">
                                    <h3><a href="/san-pham/list/{{ $v->tenkhongdauvi }}"
                                            title="{{ $v->tenvi }}">{{ $v->tenvi }}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>


        <div class="khung_dangky" style=" background-size: 100% 100%">
            <div class="pagewrapdk">
                <div class="title_dangky text-center">
                    <h3>Cảm nhận khách hàng</h3>
                    <p class="test">Hãy gửi cảm nhận, chia sẻ trải nghiệm cùng tôi!</p>
                </div>
                <div class="dk_moi">
                    <div class="form_ykien">
                        <form action="{{ route('register.new') }}" class="form-inline" role="form" method="post">
                            @csrf
                            <div class="form_left" style="width: 100%; margin: 0 auto">
                                <div class="row">
                                    <div class="ykien">
                                        <input type="text" name="fullname" id="fullname" placeholder="Họ và tên"
                                            class="form-control" value="{{old('fullname')}}">
                                        @error('fullname')
                                            <p class="alert-slugvi text-danger mt-2 mb-0" id="alert-slug-dangervi">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>
                                                <span>{{ $message }}</span>
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 padding-right-4">
                                        <div class="ykien">
                                            <input type="phone" name="phone" id="phone" placeholder="Điện thoại"
                                                class="form-control" value="{{old('phone')}}">
                                            @error('phone')
                                                <p class="alert-slugvi text-danger mt-2 mb-0" id="alert-slug-dangervi">
                                                    <i class="fas fa-exclamation-triangle mr-1"></i>
                                                    <span>{{ $message }}</span>
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8 padding-left-8">
                                        <div class="ykien">
                                            <input type="email" name="email" id="email"
                                                placeholder="Email" class="form-control" value="{{old('emailNewsLetter')}}">
                                            @error('emailNewsLetter')
                                                <p class="alert-slugvi text-danger mt-2 mb-0" id="alert-slug-dangervi">
                                                    <i class="fas fa-exclamation-triangle mr-1"></i>
                                                    <span>{{ $message }}</span>
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="ykien">
                                        <textarea id="contactdk" name="noidung" rows="5" placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                                <div class="nut_dk">
                                    <button type="submit" class="btn btn-primary" name="" id="sendnewsletter">Đăng
                                        ký</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
