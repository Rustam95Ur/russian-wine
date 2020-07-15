<!-- ABOUT -->
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 0)
        <div class="background-white about_person">
            <div class="container container-lg">
                <div class="row">
                    <div
                        class="col-sm-6 col-md-5 description-first-image">
                        <img alt='image' class="img-responsive" src="{{Voyager::image($block->image)}}">
                    </div>
                    <div
                        class="col-sm-6 col-md-6 col-md-offset-1 description-first mt-md mb-sm text_mxl_mob">
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
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 3)
        <div class="container container-lg teruar_mob_bg">
            <div class="row no-gutters background-white">
                <div class="col-md-7 description-second-title background-grey">
                    <h2>Терруар</h2>
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-7 description-second-image">
                    <img alt="block_image" class="img-responsive"
                         src="{{Voyager::image($block->image)}}">
                </div>
                <div class="col-md-5 description-second background-white">
                    <div id="map" style="position: relative; overflow: hidden;"></div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 mt-md mb-md text_s_s_mob">
                            {!!  $block->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-white description-second-below" style="margin-top: -50px">
            <div class="container container-lg">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 mt-md mb-md text_s_s_mob">
                        {!!  $block->addition !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@foreach($winery->images as $block)
    @if ($block->numbering == 1 and $block->type_id == 1)
        <div class="background-white vinogradn_title_mob">
            <div class="container container-lg">
                <div class="row">
                    <div
                        class="description-third-title col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                        <h2>Виноградники</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="background-dark-purple vinogradn_mob">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 description-third-image">
                        <img src="{{Voyager::image($block->image)}}">
                        <div class="description-third-header">
                            <div class="background-white">
                                {!!  $block->addition !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="col-xs-12 col-md-10 col-md-offset-2 mt-mdlg description-third text_s_s_mob">
                            {!!  $block->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<div class="background-white vinodeln_mob">
    <div class="container container-lg">
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-6 col-md-offset-1 description-fourth-title">
                <h2>Винодельня</h2>
            </div>
        </div>
    </div>
    <div class="container container-lg">
        @foreach($winery->images as $block)
            @if ($block->numbering == 1 and $block->type_id == 2)
                <div class="row flex_elem">
                    <div class="col-lg-5 col_2 col-md-12 mt-md text_s_s_mob">
                        {!!  $block->description !!}
                    </div>
                    <div
                        class="col-lg-7 col_1 col-lg-offset-0 col-md-offset-4 col-md-8 flex_elem_row">
                        <img alt="block_image" src="{{Voyager::image($block->image)}}"
                             class="img-responsive">
                    </div>
                </div>
            @endif
        @endforeach
        @foreach($winery->images as $block)
            @if ($block->numbering == 2 and $block->type_id == 2)
                <div class="row">
                    <div
                        class="description-fifth-image-2 col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-0 col-xs-8 mb-md">
                        <img alt="block_image" src="{{Voyager::image($block->image)}}"
                             class="img-responsive desc-elem">
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
