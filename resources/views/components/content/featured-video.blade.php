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
                                                 <div class="slider products-list grid slick-carousel" data-slidesToScroll="true" data-dots="false" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="5" data-columns="4">
                                                     
                                                     @foreach($video as $b)
                                                     <div class="item-product">
                                                         <div class="items">
                                                             <div class="products-entry content-product1 clearfix product-wapper">
                                                                 <div class="products-thumb">
                                                                     <div class='product-lable'>
                                                                         <div class="onsale">Unggulan</div>
                                                                     </div>
                                                                     <div class="product-thumb-hover">
                                                                         <a target="_blank" href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" class="woocommerce-LoopProduct-link">
                                                                              <iframe id="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" onclick="targetlink(this.id)" style="height:250px" src="{{$b->video}}" title="YouTube video player" frameborder="2" allow="accelerometer; autoplay; clipboard-write;  gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                         </a>
                                                                     </div>
                                                                     <div class='product-button'> 
                                                                        <span class="product-quickview">
                                                                            <a href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" class="quickview quickview-button quickview-16317">Quick View <i class="icon-view"></i></a>
                                                                        </span>
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