@extends('client.templates.layout.layout')
@section('content')
    <div class="pagewrap">

        <div class="clearfix margin-bottom-20"></div>

        <div class="row">
            <div class="col-md-12">
                <div>
                    
                    <div class="_date-post"> Cập nhật <i class="fa fa-calendar" aria-hidden="true"></i> :
                        {{ date('d/m/Y', $introduce->ngaysua) }}</div>
                        <div class="clearfix margin-bottom-20"></div>
                    @if (isset($introduce) && $introduce->motavi != '')
                        <div class="_desPage">{{ Str::of($introduce->motavi)->toHtmlString() }}</div>
                        <div class="clearfix margin-bottom-20"></div>
                    @endif
                    @if (isset($introduce) && $introduce->noidungvi != '')
                        <div class="content">{{ Str::of($introduce->noidungvi)->toHtmlString() }}</div>
                    @endif
                    @if (isset($introduce) && $introduce->taptin != '')
                        <p class="_link">Để xem CV, vui lòng <a
                                href="{{ asset('uploads/static/file/' . $introduce->taptin) }}"
                                target=”_blank”>Click</a> vào đây.</p>
                    @endif
                </div>
                <div class="clearfix margin-bottom-10"></div>
                <!--noindex-->
                {{-- <div class="social-share">
                    <b>Chia sẻ:</b>
                    <div id="share-buttons"></div>
                </div> --}}
                <!--/noindex-->
                <div class="clearfix margin-bottom-10"></div>
                <div class="fb-comments" data-href="" data-width="" data-numposts="5">
                </div>
            </div>
        </div>
    </div>
@endsection
