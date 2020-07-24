@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
<div class="about_person">
    <div class="container">
        <div class="row flex_elem">
            <div class="col-md-4 col_2 col-xs-12">
                <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img abs_image">
            </div>
            <div class="col-md-8 col_1 col-xs-12 person_text">
                {!!$block->description!!}
            </div>
        </div>
    </div>
</div>
    @endif
@endforeach
<div class="about_person_below">
    <div class="container">
        <div class="col-md-offset-2 col-md-4 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 0)
                <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                @endif
            @endforeach
        </div>
        <div class="col-md-4 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 0)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="person_img">
                @endif
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text_about_last">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 0)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>
        <h2 class="teruar desc-elem">Терруар</h2>
    </div>
</div>
<div class="teruar_bg first_block">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="ter_first">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 col-xs-12 text_map desc-elem">
                <div id="map">
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row flex_elem">
            <div class="col-md-offset-2 col-md-3 col-xs-12 margin_block flex_elem col_2">
                <div class="text_space col_2">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 3)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 3)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="page_image col_3">
                    @endif
                @endforeach
            </div>
            <div class="col-md-7 col-xs-12 text_teruar_last col_1">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="half_image">
                    @endif
                @endforeach
                <div id="area_space">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-xs-12 row-no-padding desc-elem">
                <h2 id="name_vinogradn" class="">Виноградники</h2>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="half_image abs_image">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-xs-12 background_purple">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-3 background_w_i">
                <div class="text_space">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 3 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 1)
                        <img src="{{Voyager::image($block->image)}}" alt="image" class="margin_center">
                    @endif
                @endforeach
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="background-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12 row-no-padding">
                    <div id="special_text" class="desc-elem"><span>Каждому<br/> винограднику присвоено<br/> собственное имя</span>
                    </div>
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 1)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="abs_img desc-elem">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-7 col-xs-12 text_on_right">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 1)
                            {!!$block->description!!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container last_block_vinogradniki">
        <div class="col-md-4 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 4 and $block->type_id == 1)
                    {!!$block->addition!!}
                @endif
            @endforeach
        </div>
        <div class="col-md-8 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 5 and $block->type_id == 1)
                    <img src="{{Voyager::image($block->image)}}" alt="image" class="desc-elem">
                @endif
            @endforeach
            <div class="text_space">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 5 and $block->type_id == 1)
                        {!!$block->description!!}
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</div>
<div class="container" style="position:relative;">
    <div class="row">
        <h2 class="name_vinodelnia">Винодельня</h2>
    </div>
</div>

<div class="vinodelnia">
    <div class="first_block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6 col-xs-12 row-no-padding">
                    <div id="proizvoditelnost">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 1 and $block->type_id == 2)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </div>
                    <div class="text_space">
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
    <div class="second_block">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="padding_text_space">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 2 and $block->type_id == 2)
                                {!!$block->description!!}
                            @endif
                        @endforeach
                    </div>
                    <div class="padding_text_space">
                        @foreach($winery->images as $block)
                            @if ($block->numbering == 2 and $block->type_id == 2)
                                {!!$block->addition!!}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-7">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 2)
                            <img src="{{Voyager::image($block->image)}}" alt="image" class="desc-elem">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

