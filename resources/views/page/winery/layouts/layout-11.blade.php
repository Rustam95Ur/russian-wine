<div class="about_person_under">
    <div class="container">
        <div class="col-sm-12 text_about_first">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 0)
                    {!!$block->description!!}
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="about_person">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 0)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col-xs-12 person_text text_space_lato">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 0)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="about_person_below">
    <div class="container">
        <div class="col-sm-12 text_about_last text_space_lato">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 0)
                    {!!$block->description!!}
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="teruar_bg">
    <div class="first_block">
        <div class="container" style="position:relative;">
            <h2 class="teruar">Терруар</h2>
            <div class="row">
                <div class="col-md-8 col-xs-12" style="position:relative;">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id ==3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img page_image">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 col-xs-12 text_map">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-md-offset-2 col-md-5 col-xs-12 text_space_lato">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 background_uknown">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id ==3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
                <div class="text_space text_space_lato">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="second_block">
        <div class="container">
            <div class="col-md-4 col-xs-12 desc-elem">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id ==3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="text_space text_space_lato">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container">
        <div class="first_block">
            <h2 id="vinogradniki_title">Виноградники</h2>
            <div class="row background_vin">
                <div class="col-md-offset-2 col-md-10 col-xs-12" style="position:relative;">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id ==1)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                    <div class="area_species">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 1)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 margin_block text_space_lato">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="text_space text_space_lato">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 col-xs-12 vinogradniki_center_text">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="second_block">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id ==1)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-3 col-xs-12">
                </div>
            </div>
            <div class="col-md-7 col-xs-12">
                <div class="text_space text_space_lato">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 1)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="area_text_space">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                <div class="text_space">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vinodelnia">
    <div class="first_block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image">
                        @endif
                    @endforeach
                    <h2 class="name_vinodelnia">Винодельня</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3 col-xs-12 background_grey">
                    <div class="text_space text_space_lato">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 2)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                    <div class="proizvodstvo text_space_old">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 2)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 text_space_lato">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="row">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 2 and $block->type_id == 2)
                                <img src="{{Voyager::image($block->image)}}" alt="image" class="image_margin_right">
                            @endif
                        @endforeach
                    </div>
                    <div class="text_space_2 text_space_old text-white">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 3 and $block->type_id == 2)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                    <div class="text_space text_space_lato text-white">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 4 and $block->type_id == 2)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3"></div>
            </div>
            <div class="row flex_elem_row">
                <div class="col-md-4 row-no-padding">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" >
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 row-no-padding">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" >
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 row-no-padding">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 5 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" >
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 vinodelnia_last_text text_space_lato">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 5 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>


