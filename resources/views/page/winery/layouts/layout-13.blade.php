@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-xs-12 person_text text_s_s">
                        {!!$block->description!!}
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="about_person_below background_grey">
    <div class="container">
        <div class="col-sm-12 text_about_last text_space_old">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 0)
                    {!!$block->addition!!}
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="last_block">
    <div class="container">
        <div class="col-md-7 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img_2 desc-elem">
                @endif
            @endforeach
        </div>
        <div class="col-md-5 col-xs-12 text_s_s">
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
        <div class="container-fluid">
            <div class="col-md-8 background_grey">
                <h2 class="teruar naming_medium">Терруар</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img page_image">
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-xs-12 text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 col-xs-12">
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second_block">
        <div class="background_purple">
            <div class="container">
                <div class="row text_in_col">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container flex_elem">
            <div class="col-md-5 col_2 col-xs-12">
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col_1 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="margin_img page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container" style="position:relative">
        <h2 class="vinogradniki_title naming_small">Виноградники</h2>
        <div class="row" style="position:relative;">
            <div class="col-md-11 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class=" page_image">
                    @endif
                @endforeach
            </div>
            <div class="absolut_cont">
                <div id="space_area">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
                <div class="text_space">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pad_spec col-md-7 col-xs-12">
                <div id="species_species_area">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-xs-12" style="position: relative;">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img page_image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="background_grey">
        <div class="container">
            <div class="col-md-12 col-xs-12 last_vinogradniki text_ml">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12" style="position: relative;">
                <h2 class="name_vinodelnia naming_large">Винодельня</h2>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="background_grey">
        <div class="container">
            <div class="col-md-7 margin_block">
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
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
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image"
                             style="margin-top:-80px;">
                    @endif
                @endforeach
            </div>
            <div class="col-md-12 text_vinodelnia_last text_ml">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
