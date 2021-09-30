 <div class="related" style="margin-bottom:100px;">
     <div class="title-block">
         <h2>Majalah Terbaru</h2>
     </div>
     <div class="content-product-list">
         <div class="products-list grid slick-carousel" data-nav="true" data-slidestoscroll="true" data-columns4="2" data-columns3="2" data-columns2="2" data-columns1="3" data-columns="4">
             @foreach($majalah as $b)
             <div class="products-entry content-product1 clearfix product-wapper">
                 <div class="products-thumb">
                     <div class='product-lable'>
                         <div class="onsale">Unggulan</div>
                     </div>
                     <div class="product-thumb-hover">
                         <a href="{{route('web.video_detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" class="woocommerce-LoopProduct-link">
                             <img width="480" height="693" src="{{asset($b->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                             <img width="480" height="693" src="{{asset($b->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
                         </a>
                     </div>
                     <div class='product-button'>
                         <span class="product-quickview">
                             <a href="{{route('web.video_detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}" class="quickview quickview-button quickview-16317">Quick View <i class="icon-view"></i></a>
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
                             <a href="{{route('web.video_detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}">{{$b->title}}</a>
                         </h3>

                     </div>
                 </div>
             </div>
             @endforeach


         </div>
     </div>
 </div>
