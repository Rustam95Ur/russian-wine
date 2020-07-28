@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person">
            <div class="container">
                <div class="row flex_elem">
                    <div class="col-md-6 col-xs-12">
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                    </div>
                    <div class="col-md-6 col-xs-12 person_text text_s_s">
                        {!!$block->description!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="about_person_below">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text_ml">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 0)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="about_last_block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 background_purple">
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 0)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 0)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img person_img">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text_s_s">
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
    <div class="container" style="position: relative;">
        <h2 class="teruar naming_medium">Терруар</h2>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 text_ml">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12" style="position:relative;">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-4 col-md-8 col-xs-12 background_purple">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container-fluid" style="position: relative;">
        <h2 class="vinogradniki_title naming_small">Виноградники</h2>

        <div class="row flex_elem_row">
            <div class="col-md-4 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 row-no-padding" style="position:relative">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
                <div id="space_area" class="desc-elem">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-md-6 col-xs-12 text_s_s background_grey">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 text_space_old">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-8 col-xs-12" style="position:relative;">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img page_image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12 desc-elem">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 5 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>

            <div class="col-md-6 col-xs-12 text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 5 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinodelnia">
    <div class="container-fluid">
        <div class="row flex_elem">
            <div class="col-md-5 col-xs-12 background_purple">
                <div class="text_s_s" style="color: #fff;">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <h2 class="name_vinodelnia naming_medium desc-elem">Винодельня</h2>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 text_s_s margin_block">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-xs-12" style="position:relative;">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 text_ml">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="text_space_old col-md-12 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
