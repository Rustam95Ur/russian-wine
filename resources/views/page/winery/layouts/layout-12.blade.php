@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="about_person background_grey">
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
<div class="container">
    <div class="row flex_elem_row">
        <div class="col-md-4">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                @endif
            @endforeach
        </div>
        <div class="col-md-4">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                @endif
            @endforeach
        </div>
        <div class="col-md-4">
            @foreach($winery->images as $block)
                @if ($block->numbering == 4 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                @endif
            @endforeach
        </div>
    </div>
</div>
@foreach($winery->images as $block)
    @if ($block->numbering == 4 and $block->type_id == 0)
        <div class="about_person_below desc-elem">
            <div class="container">
                <div class="col-sm-12 text_ml">
                    {!!$block->description!!}
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="teruar_bg">
    <div class="first_block" style="position: relative;">
        <div class="container-fluid">
            <h2 class="teruar naming_medium">Терруар</h2>
            <div class="row">
                <div class="col-md-12 col-xs-12 row-no-padding" style="position:relative;">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img page_image">
                        @endif
                    @endforeach
                    <div class="col-md-4 col-xs-12 text_map">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second_block">
        <div class="container">
            <div class="col-md-6 margin-top-col row-no-padding">
                <div class="background_purple">
                    <div class="text_space">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 3)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
                <div class="text_space_imp text_space_old">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 row-no-padding">
                <div class="text_space text_s_s ">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="margin-img">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container-fluid">
        <div class="fisrt_block" style="position: relative;">
            <h2 class="naming_medium vinogradniki_title">Виноградники</h2>
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
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div id="area_space">
                    <div class="text_s_s">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 1)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="text_s_s margin_text">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-8 col-xs-12 flex_elem">
                <div class="text_space_old">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12 row-no-padding plus_margin">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image abs_img_2">
                    @endif
                @endforeach
                <div class="text_s_s space_padding">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 col-xs-12 text_space_sa">
                <h5>Основные сорта:</h5>
                <div class="row">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 1)
                            {!!$block->addition!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="padding_not text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 last_vinogradniki text_ml">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        {!!$block->addition!!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row" style="position:relative">
            <h2 class="name_vinodelnia  naming_medium">Винодельня</h2>
        </div>
    </div>
</div>
<div class="vinodelnia">
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12 row-no-padding spec_elem">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image">
                        @endif
                    @endforeach
                </div>
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12" style="position:relative; padding-left:0px;">
			 <div class="text_space_old" id="proizvoditelnost">
                 @foreach($winery->images as $block)
                     @if ($block->numbering == 1 and $block->type_id == 2)
                         {!!$block->description!!}
                     @endif
                 @endforeach
             </div>
                <div class="text_s_s">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id ==2)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img src="{{Voyager::image($block->image)}}" alt="image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-xs-12" style="position:relative;">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 2)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img">
                @endif
            @endforeach
        </div>
        <div class="col-md-6 col-xs-12 row-no-padding">
            <div class="text_s_s">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
