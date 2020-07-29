@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 half_plus person_text text_s_s">
                        {!!$block->description!!}
                    </div>
                    <div class="col-md-6 col-xs-12 half_minus row-no-padding">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@foreach($winery->images as $block)
    @if ($block->numbering == 2 and $block->type_id == 0)
        <div class="container">
            <div class="row flex_elem">
                <div class="col-md-7 col-xs-12 half_plus row-no-padding">
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                </div>
                <div class="col-md-5 col-xs-12 text_s_s person_text_two half_minus">
                    {!!$block->description!!}
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="about_person_below">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 0)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row flex_elem_row">
        <div class="col-md-3 row-no-padding">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image">
                @endif
            @endforeach
        </div>
        <div class="col-md-3 row-no-padding">
            @foreach($winery->images as $block)
                @if ($block->numbering == 4 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image">
                @endif
            @endforeach
        </div>
        <div class="col-md-3 row-no-padding">
            @foreach($winery->images as $block)
                @if ($block->numbering == 5 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image">
                @endif
            @endforeach
        </div>
        <div class="col-md-3 row-no-padding">
            @foreach($winery->images as $block)
                @if ($block->numbering == 6 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image">
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="about_person_last container">
    <div class="col-md-12 col-xs-12 text_s_s">
        @foreach($winery->images as $block)
            @if ($block->numbering == 6 and $block->type_id == 0)
                {!!$block->description!!}
            @endif
        @endforeach
    </div>
</div>
<div class="teruar_bg">
    <div class="container-fluid" style="position:relative;">
        <h2 class="teruar naming_medium">Терруар</h2>
        <div class="row">
            <div class="col-md-12 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row margin_row">
            <div class="col-md-7 col-xs-12 text_s_s half_plus background_purple">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 half_minus row-no-padding">
                <div id="map">
                </div>
            </div>
            <div class="row spec_row">
                <div class="col-md-12 text_mxl">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 3)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row margin_row">
            <div class="col-md-offset-8 col-md-4 col-xs-12 half_minus background_white_o text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-md-5 half_plus col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image margin_img">
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col-xs-12 text_s_s half_minus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container-fluid" style="position:relative;">
        <h2 class="vinogradniki_title naming_small">Виноградники</h2>
        <div class="row">
            <div class="col-md-12 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row margin_row">
            <div id="space_area" class="col-md-5 col-xs-12 half_minus text_s_s text-white">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!! $block->description !!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!! $block->addition !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="background_grey">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 text_s_s half_plus">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!! $block->description !!}
                        @endif
                    @endforeach
                </div>
                <div class="col-md-8 col-xs-12 half_minus" style="position:relative;">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2  and $block->type_id == 1)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="">
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row flex_elem">
                <div class="col-md-7 col-xs-12 half_plus row-no-padding">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 1)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-5 col-xs-12 half_minus">
                    <div class="text_space_old">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 3 and $block->type_id == 1)
                                {!! $block->description !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 text_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        {!! $block->addition !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container flex_elem">
        <div class="row">
            <div class="col-md-5 col-xs-12 half_minus margin_block background_white_o">
                <div class="text_space_old">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 1)
                            {!! $block->description !!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 text_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 5 and $block->type_id == 1)
                        {!! $block->description !!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12 half_plus row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 5 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinodelnia">
    <div class="container-fluid">
        <div class="row" style="position:relative;">
            <h2 class="name_vinodelnia naming_medium">Винодельня</h2>
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 2)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
        </div>
    </div>
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-3 col-md-9 col-xs-12 text_s_s background_grey">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            {!! $block->description !!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 half_plus row-no-padding" style="position:relative;">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 text_s_s half_minus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        {!! $block->description !!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row flex_elem">
            <div class="col-md-7 col-xs-12 margin_minus half_minus text_s_s ">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        {!! $block->description !!}
                    @endif
                @endforeach

            </div>
            <div class="col-md-5 col-xs-12 half_plus row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-xs-12 half_minus row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
