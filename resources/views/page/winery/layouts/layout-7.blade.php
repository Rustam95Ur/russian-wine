@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 person-text">
                        <div class="text-person">
                            {!!$block->description!!}
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 row-no-padding">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                    <div class="col-md-12 col-xs-12 text_about_middle">
                        {!!$block->addition!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person_below">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 row-no-padding">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    </div>
                    <div class="col-md-8 col-xs-12 text_with_padding">
                        {!!$block->description!!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="about_person_last_text">
                        {!!$block->addition!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="teruar_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 row-no-padding">
                <h2 class="teruar">Терруар</h2>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 row-no-padding">
                <div id="map"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-6 col-xs-12">
                <div class="teruar_text_1 padding-text">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach


                </div>
            </div>
            <div class="col-md-4 col-xs-12 padding-text">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach

            </div>
        </div>
        <div class="col-md-12 spec_text_r">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 3)
                    {!!$block->description!!}
                @endif
            @endforeach
        </div>
        <div class="col-md-4 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 3)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
        </div>
        <div class="col-md-8 col-xs-12 spec_img_c">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 3)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="vinogradniki"
     style="background-image: url({{ asset('image/bg/sunny_vinogradniki_bg.png') }}); background-size: cover;">
    <h2 class="vinogradnik_title">Виноградники</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image desc-elem">
                    @endif
                @endforeach
                <div class="plod">
                    <h3 class="plod_title">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 1)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </h3>
                    <span class="plod_desc">плодоносящих виноградников</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 row-no-padding vinogradniki_text_1">
                <div class="text_with_padding">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 vinogradniki_text_2">
            <p>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </p>
        </div>
    </div>
</div>
<div class="vinogradniki_below">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-5 col-xs-12 about_vinogradniki">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="desc-elem fluid_image page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container" style="position:relative;">
    <h2 class="name_vinodelnia">Винодельня</h2>
</div>
<div class="container">
    <div class="vinodelnia">

        <div class="row">
            <div class="col-md-8  col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4  col-xs-12 text_with_padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="proizvoditelnost">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            <h2> {!!$block->addition!!}</h2>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image vinodelnia_img_up desc-elem">
                    @endif
                @endforeach
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<div class="vinodelnia_below">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-6 col-xs-12 text_with_padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-6 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image vinodelnia_img_up">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 vinodelnia_text_last">
            @foreach($winery->images as $block)
                @if ($block->numbering == 4 and $block->type_id == 2)
                    {!!$block->addition!!}
                @endif
            @endforeach
        </div>
    </div>
</div>
