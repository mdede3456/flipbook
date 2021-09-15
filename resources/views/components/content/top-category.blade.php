<div class="elementor-element elementor-element-ee8e5f6 elementor-widget elementor-widget-bwp_product_categories" data-id="ee8e5f6" data-element_type="widget" data-widget_type="bwp_product_categories.default">
    <div class="elementor-widget-container">
        <div id="category_slide_979761731631299973" class="bwp-woo-categories slider">
            <div class="content-category slick-carousel" data-dots="0" data-slidesToScroll="true" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="5" data-columns="5">
                @foreach($category as $c)
                <div class="item item-product-cat">
                    <div class="item-product-cat-content"> <a href="{{route('majalah.category',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}">
                            <div class="item-image"> <img class="elementor-animation-wobble-horizontal" src="{{asset($c->banner)}}" alt="{{$c->name}}" /></div>
                        </a>
                        <div class="product-cat-content-info">
                            <h2 class="item-title"> <a href="{{route('majalah.category',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}">{{$c->name}}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
