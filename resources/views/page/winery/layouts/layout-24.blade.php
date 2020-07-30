<div class="about_person">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 text_s_s first_about_text half_plus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 0)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 half_minus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 0)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="first_image page_img"/>
                    @endif
                @endforeach
            </div>
            <div class="col-md-12 col-xs-12 text_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 0)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 half_minus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 0)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="second_image page_img"/>
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col-xs-12 half_plus about_last_text text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 0)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="teruar_bg">
    <div class="container"><h2 class="teruar">Терруар</h2></div>
    @foreach($winery->images as $block)
        @if ($block->numbering == 1 and $block->type_id == 3)
            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_img"/>
        @endif
    @endforeach
    <div class="container">
        <div class="row margin_r" style="position:relative;">
            <div class="col-md-6 col-xs-12 background_purple text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-6 col-xs-12 map_cont" id="map">
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container">
        <h3>Виноградники</h3>
        <div class="row">
            <div class="col-md-7 col-xs-12 half_plus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class=" abs_img page_img"/>
                    @endif
                @endforeach
                <div id="area_space">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-xs-12 half_minus text_mxl pad_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-xs-12 text_space_old">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col-xs-12 background_grey text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 spec_cont_img">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="fluid_img page_img"/>
                    @endif
                @endforeach
            </div>
            <div class="col-md-12 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="vinodelnia">
    <div class="container">
        <h3>Винодельня</h3>
        <div class="row flex_elem">
            <div class="col-md-6 col_2 half_minus text_s_s flying_cont background_purple">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-offset-3 col_1 col-md-9 half_minus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_img"/>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 half_plus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_img"/>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 text_s_s half_minus">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-12 col-xs-12 text_mxl">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
