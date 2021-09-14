 <section class="elementor-section elementor-top-section elementor-element elementor-element-94f9072 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="94f9072" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-row">
             <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ff9c24" data-id="4ff9c24" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                     <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-fa4cfa9 elementor-widget elementor-widget-bwp_slider_homepage" data-id="fa4cfa9" data-element_type="widget" data-widget_type="bwp_slider_homepage.default">
                             <div class="elementor-widget-container">
                                 <div class="bwp-slider-homepage slider-homepage1">
                                     <div class="slick-carousel slick-carousel-center" data-autoplay="true" data-dots="true" data-nav="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1"> 
                                        @foreach($slider as $s)
                                             <div class="item">
                                                <div class="item-content">
                                                    <div class="content-image"> <img src="{{asset($s->image)}}" alt="Image Slider"></div>
                                                    <div class="item-info horizontal_start vertical_middle align_center animation-top">
                                                        <div class="content">
                                                            <h2 class="title-slider"><?=$s->title;?></h2>
                                                            <a class="button-slider" href="{{$s->link}}">{{$s->button}}</a>
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
 </section>
