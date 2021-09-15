<section class="elementor-section elementor-top-section elementor-element elementor-element-f7fa150 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f7fa150" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-03681e5" data-id="03681e5" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-00fa472 elementor-widget elementor-widget-bwp_product_list" data-id="00fa472" data-element_type="widget" data-widget_type="bwp_product_list.default">
                            <div class="elementor-widget-container">
                                <div id="bwp_toprated_21106229761631299973" class="bwp_product_list slider no-title">
                                    <div class="list-product">
                                        <div class="product-content">
                                            <div class="content-product-list">
                                                <div class="slider products-list grid slick-carousel" data-slidesToScroll="true" data-dots="false" data-nav="0" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
                                                    @foreach($top as $t)
                                                        <x-majalah.featured-top content="{{$t->content}}"></x-majalah.featured-top>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-940b54c" data-id="940b54c" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-563662a elementor-widget elementor-widget-bwp_product_list" data-id="563662a" data-element_type="widget" data-widget_type="bwp_product_list.default">
                            <div class="elementor-widget-container">
                                <div id="bwp_default_1350274541631299973" class="bwp_product_list slider no-title">
                                    <div class="list-product">
                                        <div class="product-content">
                                            <div class="content-product-list">
                                                <div class="slider products-list grid slick-carousel" data-slidesToScroll="true" data-dots="false" data-nav="0" data-columns4="2" data-columns3="2" data-columns2="2" data-columns1="2" data-columns1440="3" data-columns="4">

                                                    <div class="item-product">
                                                        @php
                                                        $i = 0;
                                                        @endphp
                                                        @foreach($other->skip(3) as $o)
                                                        <x-majalah.featured-component content="{{$o->content}}"> </x-majalah.featured-component>
                                                        @php
                                                        if($i++ == 1) break;
                                                        @endphp
                                                        @endforeach
                                                    </div>


                                                     <div class="item-product">
                                                        @php
                                                        $i = 0;
                                                        @endphp
                                                        @foreach($other->skip(5) as $o)
                                                         <x-majalah.featured-component content="{{$o->content}}"> </x-majalah.featured-component>
                                                        @php
                                                        if($i++ == 1) break;
                                                        @endphp
                                                        @endforeach
                                                    </div>

                                                    <div class="item-product">
                                                        @php
                                                        $i = 0;
                                                        @endphp
                                                        @foreach($other->skip(7) as $o)
                                                        <x-majalah.featured-component content="{{$o->content}}"> </x-majalah.featured-component>
                                                        @php
                                                        if($i++ == 1) break;
                                                        @endphp
                                                        @endforeach
                                                    </div>

                                                    <div class="item-product">
                                                        @php
                                                        $i = 0;
                                                        @endphp
                                                        @foreach($other->skip(9) as $o)
                                                        <x-majalah.featured-component content="{{$o->content}}"> </x-majalah.featured-component>
                                                        @php
                                                        if($i++ == 1) break;
                                                        @endphp
                                                        @endforeach
                                                    </div>  

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
