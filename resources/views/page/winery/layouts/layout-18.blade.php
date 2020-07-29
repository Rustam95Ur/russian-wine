@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row flex_elem">
                    <div class="col-md-6 col_2 col-xs-12 half_plus">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                    <div class="col-md-6 col_1 col-xs-12 person_text text_s_s half_minus">
                        {!!$block->description!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="about_person_below">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text_s_s">
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
            <div class="col-md-12 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container flex_elem">
        <div class="row col_1 margin_row">
            <div class="col-md-offset-7 col-md-5 col-xs-12 background_white_o text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row col_3">
            <div class="col-md-7 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12">
                <div id="map">
                </div>
            </div>
        </div>
        <div class="row col_2">
            <div class="col-md-10 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image desc-elem">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container" style="position:relative;">
        <h2 class="vinogradniki_title naming_small">Виноградники</h2>
        <div class="row">
            <div class="col-md-8 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 row-no-padding" style="margin-bottom: -5%;">
                <div id="space_area">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
                <div class="background_purple text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-12 col-xs-12 text_mxl vin_t">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-offset-4 col-md-8 col-xs-12 background_grey">

            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 1)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="margin_img"/>
                @endif
            @endforeach
            <div class="text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row flex_elem">
            <div class="col-md-5 col_2 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col_1 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image"/>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
    <div class="vinodelnia">
         <div class="container-fluid">
             <div class="row">
                 <h2 class="name_vinodelnia naming_medium">Винодельня</h2>
                 @foreach($winery->images as $block)
                     @if ($block->numbering == 1 and $block->type_id == 2)
                         <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                     @endif
                 @endforeach
             </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12 margin_block background_white">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row margin-row">
                <div class="col-md-offset-2 col-md-6 col-xs-12 margin_plus">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 col-xs-12 text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
