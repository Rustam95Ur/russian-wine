@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 image_ab">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_3_img">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="page_3_desc">
                            {!!$block->description!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@foreach($winery->images as $block)
    @if ($block->numbering == 2 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 image_ab">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="about_me_page_3">
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="page_3_desc">
                            {!!$block->description!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-2 text-left" style="height:130px;" id="ter_cont">
            <h1 class="teruar_page_3">Терруар</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-12 row-no-padding image_ab">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 3)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
        </div>
        <div class="col-md-6 col-xs-12 row-no-padding image_ab">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 3)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
            <div class="text_over_3">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="morskoi">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div id="map"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 3)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_3_img jump_img">
                @endif
            @endforeach
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="grapes_text">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="vinogradniki_page_3">
        <div class="col-md-offset-4 col-md-12 col-xs-12" style="padding-right: 0px">
            <h1 class="vinogradniki_title_3">Виноградники</h1>
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 1)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
            <div class="d-none mobile-block">
                <div class="dvesti_ga">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="flex_elem row">
        <div class="col-md-6 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 1)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="grape4">
                @endif
            @endforeach
            <div class="dvesti_ga image_ab">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="grape4_text">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row row-no-padding two_pic">
    <div class="col-md-6 col-xs-12" style="width: calc(50% + 35px);">
        @foreach($winery->images as $block)
            @if ($block->numbering == 3 and $block->type_id == 1)
                <img src="{{Voyager::image($block->image)}}" alt="image" class="page_3_img">
            @endif
        @endforeach
    </div>
    <div class="col-md-4 col-xs-12">
        @foreach($winery->images as $block)
            @if ($block->numbering == 4 and $block->type_id == 1)
                <img src="{{Voyager::image($block->image)}}" alt="image" class="page_3_img" style="padding-right:13px;">
            @endif
        @endforeach
    </div>
</div>
<div class="row row-no-padding lineika_div">
    <div class="col-md-offset-2 col-md-5 col-xs-12">
        <div class="lineika">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 1)
                    {!!$block->description!!}
                @endif
            @endforeach
        </div>
        <div class="under_lineika">
            @foreach($winery->images as $block)
                @if ($block->numbering == 4 and $block->type_id == 1)
                    {!!$block->description!!}
                @endif
            @endforeach
        </div>
    </div>
    <div class="col-md-5 col-xs-12 last_img">
        @foreach($winery->images as $block)
            @if ($block->numbering == 5 and $block->type_id == 1)
                <img src="{{Voyager::image($block->image)}}" alt="image" class="page_3_img">
            @endif
        @endforeach
    </div>
</div>
{{--<div class="vinodelnia_page_3">--}}
{{--    <div class="container">--}}
{{--        <div class="row row-no-padding">--}}
{{--            <div class="col-md-4">--}}
{{--                <h1 class="vinodelnia_title_3">Винодельня</h1>--}}
{{--                <img src="/image/{{ description_fourth_image }}" class="page_image">--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <img src="/image/{{ description_fourth_image_two }}" class="page_image">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="row row-no-padding no_marg_row">--}}
{{--    <div class="col-md-7 col-xs-12 jugs_bg">--}}
{{--        <div class="jugs_bg">--}}
{{--            <img src="/image/{{ description_fourth_image_three }}" class="jugs">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-5 col-xs-12">--}}
{{--        <div class="jugs_text">--}}
{{--            {{ description_fourth }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="row  row-no-padding last_line">--}}
{{--    <div class="col-md-offset-2 col-md-4 col-xs-12">--}}
{{--        <img src="/image/{{ description_fourth_image_four }}">--}}
{{--        <div class="bottle_text image_ab">--}}
{{--            {{ description_fourth_two }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-6 col-xs-12">--}}
{{--        <div class="factory_div">--}}
{{--            <img src="/image/{{ description_fourth_image_five }}" class="fact_pic">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="bottle_text mob_elem col-md-6">--}}
{{--        {{ description_fourth_two }}--}}
{{--    </div>--}}
{{--</div>--}}

