 <section class="elementor-section elementor-top-section elementor-element elementor-element-ca68a0f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca68a0f" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-row">
             <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fdf8453" data-id="fdf8453" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                     <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-9faa295 elementor-widget elementor-widget-bwp_product_list" data-id="9faa295" data-element_type="widget" data-widget_type="bwp_product_list.default">
                             <div class="elementor-widget-container">
                                 <div id="bwp_toprated_20824383841631299973" class="bwp_product_list slider no-title">
                                     <div class="list-product">
                                         <div class="product-content">
                                             <div class="content-product-list">
                                                 <div class="slider products-list grid slick-carousel" data-slidesToScroll="true" data-dots="false" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="5" data-columns="6">
                                                     @foreach($comic as $c)
                                                          <div class="item-product">
                                                         <div class="items">
                                                             <div class="products-entry content-product1 clearfix product-wapper">
                                                                 <div class="products-thumb"> 
                                                                     <div class="product-thumb-hover">
                                                                        <a href="shop/healed-new-life/index.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="480" height="693" src="{{asset($c->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                                                                            <img width="480" height="693" src="{{asset($c->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
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
                                                                         <div class="">
                                                                             <div class=""></div>
                                                                             <div class=""><i class="fa fa-eye"></i> (1)</div>
                                                                         </div>
                                                                         <div class="list-author">Genre : <span class="item-author"><a href="product_author/alyce-kris/index.html">{{$c->genre->name ?? ''}}</a></span></div>
                                                                         <h3 class="product-title"><a href="shop/healed-new-life/index.html">{{$c->name}}</a></h3> 
                                                                          
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
