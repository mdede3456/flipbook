 @extends('layouts.website')
 @section('content')

 <div id="bwp-main" class="bwp-main">

     <div id="primary" class="content-area">
         <main id="main" class="site-main" role="main">
             <div class="container" style="margin-top:20px;">
                 <div class="main-archive-product row">
                   
                     <div id="dokan-primary" class="dokan-single-store dokan-w8 col-xl-12 col-lg-12 col-md-12 col-12">
                         <div id="dokan-content" class="store-page-wrap woocommerce" role="main">
                             <div class="profile-frame">
                                 <div class="profile-info-box profile-layout-default"> <img src="{{asset($author->banner)}}" alt="Wpbingo" title="Wpbingo" class="profile-info-img">
                                     <div class="profile-info-summery-wrapper dokan-clearfix">
                                         <div class="profile-info-summery">
                                             <div class="profile-info-head">
                                                 <div class="profile-img profile-img-circle"> <img data-del="avatar" alt='Wpbingo' src='{{asset($author->photo)}}' class='avatar pp-user-avatar avatar-150 photo ' height='150' width='150' /></div>
                                                 <h2 class="store-name">{{$author->name}}</h2>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>


                             <div class="seller-items" style="margin-top:20px; margin-bottom:20px;">
                                 <ul class="products products-list row grid" data-col="col-xl-3 col-lg-4 col-md-6 col-6">
                                     @foreach($author->majalah as $b)
                                     <li class="col-xl-3 col-lg-4 col-md-6 col-6 post-24660 product type-product status-publish has-post-thumbnail product_author-sabela-hupter product_brand-yoga product_cat-modern-fiction first instock sale shipping-taxable purchasable product-type-simple">
                                         <div class="products-entry content-product1 clearfix product-wapper">
                                             <div class="products-thumb">

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
                                                <div class="list-author">By : <span class="item-author"><a href="../product_author/alyce-kris/index.html">{{$b->author->name ?? ''}}</a></span></div>
                                                <h3 class="product-title"><a href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}">{{$b->title}}</a></h3>
                                            </div>
                                        </div>
                                         </div>
                                     </li>
                                     @endforeach
                                 </ul>
                             </div>
                             {{-- <nav role="navigation" id="nav-below" class="site-navigation paging-navigation">
                                 <ul class="pager"></ul>
                                 <div class="dokan-pagination-container">
                                     <ul class="dokan-pagination">
                                         <li class="disabled"><a href="#">&larr; Previous</a></li>
                                         <li class="active"><a href="#">1</a></li>
                                         <li><a href="page/2/index.html">2</a></li>
                                         <li class=""><a href="page/2/index.html">Next &rarr;</a></li>
                                     </ul>
                                 </div>
                             </nav> --}}
                         </div>
                     </div>
                 </div>
             </div>
         </main>
     </div>
 </div>

 @endsection
