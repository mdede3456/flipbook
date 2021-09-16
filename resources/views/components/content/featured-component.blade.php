 <section class="elementor-section elementor-top-section elementor-element elementor-element-63c14bc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="63c14bc" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-row">
             <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c7c9d3" data-id="1c7c9d3" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                     <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-4de8a66 elementor-widget elementor-widget-bwp_product_list" data-id="4de8a66" data-element_type="widget" data-widget_type="bwp_product_list.default">
                             <div class="elementor-widget-container">
                                 <div id="bwp_featured_12339649751631299972" class="bwp_product_list slider no-title">
                                     <div class="list-product">
                                         <div class="product-content">
                                             <div class="content-product-list">
                                                 <div class="slider products-list grid slick-carousel" data-slidesToScroll="true" data-dots="false" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="5" data-columns="6">
                                                     
                                                     @foreach($book as $b)
                                                     <div class="item-product">
                                                         <div class="items">
                                                             <div class="products-entry content-product1 clearfix product-wapper">
                                                                 <div class="products-thumb">
                                                                     <div class='product-lable'>
                                                                         <div class="onsale">Unggulan</div>
                                                                     </div>
                                                                     <div class="product-thumb-hover">
                                                                         <a href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" class="woocommerce-LoopProduct-link">
                                                                             <img width="480" height="693" src="{{asset($b->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                                                                             <img width="480" height="693" src="{{asset($b->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
                                                                         </a>
                                                                     </div>
                                                                     <div class='product-button'> 
                                                                        <span class="product-quickview">
                                                                            <a href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" class="quickview quickview-button quickview-16317">Quick View <i class="icon-view"></i></a>
                                                                        </span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="products-content">
                                                                     <div class="contents">
                                                                         <div class="">
                                                                             <div class=""></div>
                                                                             <div class=""><i class="fa fa-eye"></i> ( {{count($b->viewer)}} )</div>
                                                                         </div>
                                                                         <div class="list-author">By : <span class="item-author"><a href="{{route('author.detail',[$b->author_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->author->name ?? 'none'))])}}">{{$b->author->name ?? 'no-name'}}</a></span></div>
                                                                         <h3 class="product-title">
                                                                            <a href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}">{{$b->title}}</a>
                                                                        </h3> 
                                                                       
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
