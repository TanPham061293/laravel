<div class="clearfix"></div>
<div class="_slide">
    <div id="wowslider-container">
        <div class="ws_images">
            <ul>
                @if (isset($slider) && count($slider) > 0)
                    @foreach ($slider as $v)
                        <li><a href="" title="{{$v->tenvi}}"><img width="100%" height="620spx"
                                    src="{{asset('uploads/'.$v->photo)}}"
                                    alt="" onerror="this.src='{{asset('uploads/noimage/noimage.png')}}';"
                                    title="{{$v->tenvi}}" id="wows_1" /></a></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
