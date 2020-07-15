<!-- ABOUT -->
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="background-white about_person">
            <div class="container container-lg">
                <div class="row">
                    <div class="col-md-4 col-xs-12 description-first-image">
                        <img alt='image' class="img-responsive" src="{{Voyager::image($block->image)}}">
                    </div>
                    <div class="col-md-8 col-xs-12 person_text">
                        {!!$block->description!!}
                    </div>
                    <div class="col-md-12 col-xs-12 person_text_2 person_text">
                        {!!$block->addition!!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<!-- TERUAR -->
<div class="teruar_bg">
    <h2 class="teruar">Терруар</h2>
    <div class="container" id="ter_first">
        <div class="col-md-4 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 3)
                    {!!  $block->description !!}
                @endif
            @endforeach
        </div>
        <div class="col-md-8 col-xs-12">
            @foreach($winery->images as $block)
                @if ($block->numbering == 1 and $block->type_id == 3)
                    <img alt="image_block" src="{{Voyager::image($block->image)}}"
                         class="page_image">
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="text_field">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}" class="fluid_img wine_image">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 text_ter_two">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!  $block->description !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="map_space">
    <div class="container">
        <div class="col-md-7 col-xs-12">
            <div class="text_with_map">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 3)
                        {!!  $block->addition !!}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            <div id="map" style="position: relative; overflow: hidden;">
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container">
        <div class="row">
            <h2 class="vinogradniki_title">Виноградники</h2>
            <div class="col-md-8 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}" class="page_image">
                    @endif
                @endforeach

            </div>
            <div class="col-md-4 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 1)
                        {!!  $block->addition !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="vinogradniki_flex">
            <div class="col-md-7 col-xs-12 row-no-padding">
                <div class="about_vinogradnik">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!!  $block->description !!}
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 1)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}"
                             class="fluid_image page_image abs_img">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="posadki_vinogradnikov">
    <div class="container">
        <div class="col-md-4 col-xs-12 row-no-padding">
            <h2>Посадки виноградников составляют</h2>
        </div>
        <div class="species_posadki">
            <div class="col-md-8 col-xs-12 row-no-padding">
                <div class="row">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 2 and $block->type_id == 1)
                            {!!  $block->addition !!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="posadki_vinogradnikov_below">
    <div class="container">
        <div class="col-md-6 col-xs-12 first_text">
            <h4 class="">Плотность посадки</h4>
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 1)
                    {!!  $block->addition !!}
                @endif
            @endforeach
        </div>
        <div class="col-md-6 col-xs-12 second_text">
            @foreach($winery->images as $block)
                @if ($block->numbering == 3 and $block->type_id == 1)
                    {!!  $block->description !!}
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="vinodelnia">
    <div class="container-fluid">
        <h2 class="vinogradnik_title">Винодельня</h2>
        <div class="row" id="vinodelnia_flex_1">
            <div class="col-md-5 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 1 and $block->type_id == 2)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}">
                        <div class="col-md-offset-6 col-md-6 col-xs-12">
                            {!!  $block->description !!}
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-3 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        <img alt="image_block" src="{{Voyager::image($block->image)}}">
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 col-xs-12 row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 3 and $block->type_id == 2)
                        <div class="proizvoditelnost">
                            {!!  $block->description !!}
                        </div>
                        <img alt="image_block" src="{{Voyager::image($block->image)}}">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12 text_below_first">
                <div class="col-md-offset-6 col-md-6 col-xs-12">
                    @foreach($winery->images as $block)
                        @if ($block->numbering == 1 and $block->type_id == 2)
                            {!!  $block->addition !!}
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="col-md-6 col-xs-12 text_below_second row-no-padding">
                @foreach($winery->images as $block)
                    @if ($block->numbering == 2 and $block->type_id == 2)
                        {!!  $block->description !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
