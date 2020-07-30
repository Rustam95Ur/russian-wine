@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person background_grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 person_text text_s_s half_minus">
                        {!!$block->description!!}
                    </div>
                    <div class="col-md-6 col-xs-12 half_plus row-no-padding">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@foreach($winery->images as $block)
    @if ($block->numbering == 2 and $block->type_id == 0)
        <div class="about_person_below">
            <div class="container">
                <div class="row flex_elem">
                    <div class="col-md-7 col-xs-12 half_plus row-no-padding">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                    <div class="col-md-5 col-xs-12 person_text text_s_s half_minus">
                        {!!$block->description!!}
                    </div>
                    <div class="col-md-12 text_mxl">
                        {!!$block->addition!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="teruar_bg">
    <div class="background_purple">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 half_plus row-no-padding" style="position:relative;">
                    <h2 class="teruar naming_medium">Терруар</h2>
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image teruar_first">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 col-xs-12 half_minus text_s_s">
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
            <div class="col-md-7 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12" id="map_container">
                <div id="map">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12 half_plus row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image abs_img">
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col-xs-12 half_minus text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinodelnia" style="position:relative;">
    <div class="container-fluid">
        <div class="row">
            <h2 class="name_vinodelnia naming_medium">Винодельня</h2>
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 2)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                @endif
            @endforeach
            <div class="container">
                <div class="col-md-offset-7 col-md-5 col-xs-12 abs_block" style="position:relative;">
                    <div class="abs_block">
                        <div id="proizvoditelnost">
                            @foreach($winery->images as $block)
                                @if ($block->numbering == 1 and $block->type_id == 2)
                                    {!!$block->addition!!}
                                @endif
                            @endforeach
                        </div>
                        <div class="background_purple text_mxl text-white">
                            @foreach($winery->images as $block)
                                @if ($block->numbering == 1 and $block->type_id == 2)
                                    {!!$block->description!!}
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background_grey">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12 text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                <div class="col-md-5 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 col-xs-12 text_mxl">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 2)
                    {!!$block->addition!!}
                @endif
            @endforeach
        </div>
    </div>
</div>
