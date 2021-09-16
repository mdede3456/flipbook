 @extends('layouts.website')
 @section('content')

 <div id="primary" class="content-area">
     <main id="main" class="site-main" role="main">
         <div class="container">
             <x-content.komik-banner></x-content.komik-banner> 
             <div class="main-archive-product row style-1 list">
                 <div class="bwp-sidebar sidebar-product col-xl-3 col-lg-3 col-md-12 col-12">
                     <div class="button-filter-toggle hidden-lg hidden-md"> Close</div>
                     <aside id="bwp_woo_categories_widget-3" class="widget bwp_woo_categories_widget">
                         <h3 class="widget-title">Genre</h3>
                         <div class="block_content">
                             <ul class="product-categories">
                                 @foreach($cate as $c)
                                <li class="cat-item cat-parent"> <a href="{{route('comic.genre',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}">{{$c->name}} <span>( {{count($c->komik)}} )</span> </a> </li>
                                @endforeach
                             </ul>
                         </div>
                     </aside>

                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-12 col-12">

                     <div class="content-shop">
                         <div class="bwp-top-bar top clearfix">
                             <div class="content-top">
                                 <div class="content-title-heading">
                                     <h1 class="text-title-heading">{{$page}}</h1>
                                 </div>
                             </div>
                             <div class="content-topbar-bottom">
                                 <div class="woocommerce-notices-wrapper"></div><a class="button-filter-toggle"></a>
                                 <div class="woocommerce-filter-title"></div>
                             </div>
                         </div>
                         <div class="content-products-list">
                             <ul class="products products-list row list" data-col="col-xl-3 col-lg-4 col-md-6 col-6">
                                 @foreach($comic as $cm)
                                 <li class="col-xl-6 col-lg-12 col-xs-12 post-16317 product type-product status-publish has-post-thumbnail product_author-alyce-kris product_brand-slocan product_cat-fantasy product_cat-romance product_tag-hot product_tag-men first instock sale featured shipping-taxable purchasable product-type-simple">
                                     <div class="products-entry clearfix product-wapper">
                                         <div class="row">
                                             <div class="col-sm-6">
                                                 <div class="products-thumb">

                                                     <div class="product-thumb-hover">
                                                         <a href="{{route('comic.detail',[$cm->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $cm->name))])}}" class="woocommerce-LoopProduct-link">
                                                             <img width="480" height="693" src="{{asset($cm->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                                                             <img width="480" height="693" src="{{asset($cm->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
                                                         </a>
                                                     </div>
                                                     
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                                 <div class="products-content">
                                                     <div class="">
                                                         <div class=""></div>
                                                         <div class=""> <i class="fa fa-book"></i> ( {{count($cm->chapter)}} )</div>
                                                     </div>
                                                     <div class="list-author">Genre : <span class="item-author"><a href="#">{{$cm->genre->name ?? ''}}</a></span></div>
                                                     <h3 class="product-title"><a href="{{route('comic.detail',[$cm->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $cm->name))])}}">{{$cm->name}}</a></h3>

                                                     <div class="description">
                                                         <?=substr($cm->description,0,150);?>
                                                     </div>
                                                     <div class='product-button'>
                                                         <div data-title="Add to cart">
                                                             <a rel="nofollow" href="{{route('comic.detail',[$cm->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $cm->name))])}}" data-quantity="1" data-product_id="16317" data-product_sku="D1115" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Lihat Detail</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 @endforeach 
                             </ul>
                         </div>
                         
                     </div>
                 </div>
             </div>
         </div>
     </main>
 </div>
 @endsection 
