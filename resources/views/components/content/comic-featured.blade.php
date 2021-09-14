<section class="elementor-section elementor-top-section elementor-element elementor-element-b0e5239 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b0e5239" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf4b0c5" data-id="cf4b0c5" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-4aa8746 elementor-widget elementor-widget-bwp_product_list" data-id="4aa8746" data-element_type="widget" data-widget_type="bwp_product_list.default">
                            <div class="elementor-widget-container">
                                <div id="bwp_bestsales_18167332381631299973" class="bwp_product_list slider no-title">
                                    <div class="list-product">
                                        <div class="product-content">
                                            <div class="content-product-list">
                                                <div class="slider products-list grid slick-carousel" data-slidesToScroll="true" data-dots="false" data-nav="0" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="2" data-columns1440="2" data-columns="2">
                                                    @foreach($manga as $m)
                                                    <div class="item-product">
                                                        <div class="items">
                                                            <div class="products-entry content-product3 clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class='product-lable'></div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop/cup-cake-diares/index.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="480" height="693" src="{{asset($m->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                                                                            <img width="480" height="693" src="{{asset($m->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
                                                                        </a>
                                                                    </div>
                                                                     
                                                                    <div class='product-button'>
                                                                        <span class="product-quickview">
                                                                            <a href="#" data-title="Lihat Komik" data-product_id="3986" class="quickview quickview-button quickview-3986">Lihat Komik <i class="icon-view"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents">
                                                                        <div style="margin-bottom:5px">
                                                                            <div class=""></div>
                                                                            <div class=""><i class="fa fa-eye"></i> (0)</div>
                                                                        </div>
                                                                        <h3 class="product-title"><a href="shop/cup-cake-diares/index.html">{{$m->name}}</a></h3>
                                                                        <div class="list-author">Genre : <span class="item-author"><a href="product_author/alec-hansen/index.html">{{$m->genre->name ?? ''}}</a></span></div>  
                                                                        <div class="description">
                                                                           <?=substr($m->description,0,150);?>....
                                                                        </div>
                                                                        <div data-title="Detail"><a rel="nofollow" href="index650d.html?add-to-cart=3986" data-quantity="1" data-product_id="3986" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Lihat Detail</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
</section>
