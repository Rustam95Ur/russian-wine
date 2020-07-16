<!-- ABOUT -->
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="container about_person">
            <div class="row">
                <div class="col-md-5 col-xs-12 person_text">
                    {!!$block->description!!}
                </div>
                <div class="col-md-7 col-xs-12">
                    <img alt='image' src="{{Voyager::image($block->image)}}" class="person_img">
                </div>
            </div>
        </div>
    @endif
    @if ($block->numbering == 2 and $block->type_id == 0)
        <div class="descrip_two">
            <div class="container">
                <div class="row flex_elem">
                    <div class="col-md-offset-1 col-md-4 col-xs-12">
                        <img alt='image' src="{{Voyager::image($block->image)}}" class="person_img abs_img desc-elem">
                    </div>
                    <div class="col-md-7 col-xs-12 person_text">
                        {!!$block->description!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($block->numbering == 2 and $block->type_id == 0)
        <div class="text_field text_about_below">
            <div class="container">
                <div class="col-md-12">
                    {!!$block->addition!!}
                </div>
            </div>
        </div>
    @endif
@endforeach
<!-- TERUAR -->
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 3)
        <div class="teruar2"
             style="background-image: url({{Voyager::image($block->image)}}); background-size: 100% 100%;">
            <div class="container">
                <h1>Терруар</h1>
                <div class="desc_teruar2">
                    {!!  $block->description !!}
                </div>
            </div>
        </div>
    @endif
@endforeach
<div class="map_div">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12" id="map" style="position: relative; overflow: hidden;"></div>
            <div class="col-md-7 col-xs-12 text_map">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 3)
                        {!!  $block->addition !!}
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="images_block">
    <div class="row flex_elem_row">
        <div class="col-md-6 col-xs-12 row-no-padding">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 3)
                    <img alt="image_block" src="{{Voyager::image($block->image)}}" class="page_image">
                @endif
            @endforeach
        </div>
        <div class="col-md-6 col-xs-12 row-no-padding">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 3)
                    <img alt="image_block" src="{{Voyager::image($block->image)}}" class="page_image">
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="vinogradnik2">
    <div class="row">
        <div class="col-md-offset-2 col-md-4">
        </div>
        <div class="col-md-6">
            <h1>Виноградники</h1>
        </div>
    </div>
    <div class="row flex_elem">
        <div class="col-md-offset-2 col-md-4 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 1)
                    {!!  $block->description !!}
                @endif
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 1)
                    <img alt="image_block" src="{{Voyager::image($block->image)}}" class="page_image">
                @endif
            @endforeach
            <div class="krasni_kvadrat">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!!  $block->addition !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="two_pic_div">
    <div class="row">
        <div class="col-md-8 col-xs-12 desc-elem">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2 and $block->type_id == 1)
                    <img alt="image_block" src="{{Voyager::image($block->image)}}" class="crazy_pic_one">
                @elseif ($block->numbering == 3 and $block->type_id == 1)
                    <img alt="image_block" src="{{Voyager::image($block->image)}}" class="crazy_pic_two">
                @endif
            @endforeach
        </div>
        <div class="col-md-4 col-xs-12 crazy_text">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 1)
                    {!!  $block->description !!}
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="description_here">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 area_txt">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        {!!  $block->addition !!}
                    @endif
                @endforeach
                <div class="desc_table_text">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 4 and $block->type_id == 1)
                            {!!  $block->description !!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 col-xs-12">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 4 and $block->type_id == 1)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12 last_txt_vinogr">
        <div class="history">
            @foreach($winery->images as $block)
                @if ($block->numbering == 2  and $block->type_id == 1)
                    {!!  $block->description !!}
                @endif
            @endforeach
        </div>
    </div>
</div>

<div class="vinodelnia2">
    <div class="container">
        <h1>Винодельня</h1>
    </div>
    <div class="col-md-8 col-xs-12" style="margin-left:-15px;">
        @foreach($winery->images as $block)
            @if ($block->numbering == 1  and $block->type_id == 2)
                <img alt="image_block" src="{{Voyager::image($block->image)}}" class="vino_img">
            @endif
        @endforeach
        <div class="vinodelnia_text">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1  and $block->type_id == 2)
                    {!!  $block->description !!}
                @endif
            @endforeach
        </div>
    </div>

</div>
<div class="row special_row">
    <div class="col-md-offset-2 col-md-10 monde_desc">
        <div class="row flex_elem">
            <div class="col-md-5 vinodelnia_prelast_text">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2  and $block->type_id == 2)
                        {!!  $block->description !!}
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}" class="crazy_pic_three">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-2 col-md-10 last_desc">
        <div class="row">
            <div class="col-md-5">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}" class="crazy_pic_four">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3  and $block->type_id == 2)
                        {!!  $block->description !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
