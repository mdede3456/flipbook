 @extends('layouts.website')
 @section('content')
 <div id="bwp-main" class="bwp-main">
 <div id="primary" class="content-area" style="margin-top:20px;">
     <main id="main" class="site-main" role="main">  
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12">
                     <div id="main-content" class="main-content">
                         <div id="primary" class="content-area">
                             <div id="content" class="site-content" role="main">
                                 <article id="post-20463" class="post-20463 page type-page status-publish hentry">
                                     <div class="entry-content clearfix">


                                         <div id="dokan-seller-listing-wrap" class="grid-view">
                                             <div class="seller-listing-content">
                                                 <ul class="dokan-seller-wrap">
                                                     @foreach($author as $a)
                                                     <li class="dokan-single-seller woocommerce coloum-3 ">
                                                         <div class="store-wrapper">
                                                             <div class="store-header">
                                                                 <div class="store-banner">
                                                                     <a href="{{route('author.detail',[$a->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $a->name))])}}">
                                                                         <img src="{{asset($a->banner)}}">
                                                                     </a>
                                                                 </div>
                                                             </div>
                                                             <div class="store-content ">
                                                                 <div class="store-data-container">
                                                                     <div class="featured-favourite"></div>
                                                                     <div class="store-data store_open_is_on">
                                                                         <h2><a href="{{route('author.detail',[$a->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $a->name))])}}">{{$a->name}}</a></h2>

                                                                         <p class="store-address">
                                                                             <span class='street_1'> Video : {{count($a->video)}}</span><br>
                                                                             <span class='city'> Majalah : {{count($a->majalah)}}</span><br>
                                                                         </p>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="store-footer">
                                                                 <div class="seller-avatar"> <a href="{{route('author.detail',[$a->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $a->name))])}}"> <img src="{{asset($a->photo)}}" alt="Bookshop" size="150"> </a></div> <a href="{{route('author.detail',[$a->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $a->name))])}}" title="Visit Store"> <span class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span> </a>
                                                             </div>
                                                         </div>
                                                     </li>
                                                     @endforeach
                                                     <div class="dokan-clearfix"></div>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </article>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </main>
 </div>
 </div>

 @endsection
