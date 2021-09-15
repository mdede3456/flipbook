 <section class="elementor-section elementor-top-section elementor-element elementor-element-6e1a9a7 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6e1a9a7" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-row">
             <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e554f5b" data-id="e554f5b" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                     <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-af80744 elementor-widget elementor-widget-bwp_slider" data-id="af80744" data-element_type="widget" data-widget_type="bwp_slider.default">
                             <div class="elementor-widget-container">
                                 <div class="bwp-slider default">
                                     <div class="slick-carousel slick-carousel-center" data-dots="false" data-nav="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
                                         @foreach($video as $v)
                                         <div class="item">
                                             <div class="item-content">
                                                 <div class="content-image">
                                                     <a href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">
                                                         <img class="elementor-animation-wobble-vertical" src="{{asset($v->thumbnail)}}" alt="{{$v->title}}">
                                                     </a>
                                                 </div>
                                                 <div class="content-info">
                                                     <div class="content">
                                                         <h2 class="title-slider">{{$v->title}}</h2>
                                                         <div class="subtitle-slider">{{$v->category->name ?? ''}}</div>
                                                         <div class="button-slider"><a href="{{ route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))]) }}">Explore now</a></div>
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
