@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person background_grey">
            <div class="container">
                <div class="row flex_elem">
                    <div class="col-md-5 col_2 col-xs-12">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                    <div class="col-md-7 col_1 col-xs-12 person_text text_s_s">
                        {!!$block->description!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="about_person_below">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text_mxl">
                        {!!$block->addition!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="teruar_bg">
    <div class="container-fluid" style="position:relative;">
        <h2 class="teruar naming_medium">Терруар</h2>
        <div class="row">
            <div class="col-md-offset-3 col-md-9 col-xs-12 background_purple">
                <div id="map">
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="background_grey">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="text_s_s">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 2 and $block->type_id == 3)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row flex_elem">
                <div class="col-md-6 col_2 col-xs-12 text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 col_1 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container-fluid" style="position:relative;">
        <h2 class="vinogradniki_title">Виноградники</h2>
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
        <div class="row">
            <div class="col-md-offset-6 col-md-6 col-xs-12 margin_block row-no-padding">
                <div id="space_area">
                    <span>
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 1)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </span>
                </div>
                <div class="background_white_o text_ml">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 text_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="background_grey">
        <div class="container">
            <div class="row flex_elem">
                <div class="col-md-6 col_2 col-xs-12 text_pad">
                    <div class="text_space_old">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 2 and $block->type_id == 1)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </div>
                    <div class="species_box">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 3 and $block->type_id == 1)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col_1 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vinodelnia">
    <div class="container" style="position:relative;">
        <h2 class="name_vinodelnia naming_medium">Винодельня</h2>
    </div>
    @foreach($winery->images as $block)
        @if ($block->numbering == 1 and $block->type_id == 2)
            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
        @endif
    @endforeach
    <div class="container flex_elem">
        <div class="row margin-row col_1">
            <div class="col-md-5 col-xs-12">
                <div id="proizvoditelnost" class="text_space_old">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 col-xs-12" style="position:relative;">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-7 col_3 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 2)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="float_img">
                @endif
            @endforeach
        </div>
        <div class="col-md-5 col_2 col-xs-12 text_s_s">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 2)
                    {!!$block->description!!}
                @endif
            @endforeach
        </div>
        <div class="col-md-12 col_4 col-xs-12 text_mxl">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 2)
                    {!!$block->addition!!}
                @endif
            @endforeach
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 row-no-padding" style="position:relative;">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image">
                    @endif
                @endforeach
                <div class="text_space_old text-white">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
