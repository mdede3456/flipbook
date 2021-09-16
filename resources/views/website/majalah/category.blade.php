@extends('layouts.website')

@section('content')
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <x-content.category-banner></x-content.category-banner>

            <div class="main-archive-product row style-1 grid">
                <div class="bwp-sidebar sidebar-product col-xl-3 col-lg-3 col-md-12 col-12">
                    <div class="button-filter-toggle hidden-lg hidden-md"> Close</div>
                    <aside id="bwp_woo_categories_widget-3" class="widget bwp_woo_categories_widget">
                        <h3 class="widget-title">Kategori</h3>
                        <div class="block_content">
                            <ul class="product-categories">
                                @foreach($cate as $c)
                                <li class="cat-item cat-parent"> <a href="{{route('majalah.category',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}">{{$c->name}} <span>( {{count($c->majalah)}} )</span> </a> </li>
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
                                    <h1 class="text-title-heading"> Buku Berdasarkan Kategori : {{$category->name ?? ''}}</h1>
                                </div>
                            </div>
                            <div class="content-topbar-bottom">
                                <div class="woocommerce-notices-wrapper"></div><a class="button-filter-toggle"></a>
                                <div class="woocommerce-filter-title"></div>
                            </div>
                        </div>
                        <div class="content-products-list">
                            <ul class="products products-list row grid" data-col="col-xl-3 col-lg-4 col-md-6 col-6">
                                @foreach($book as $b)
                                <li class="col-xl-3 col-lg-4 col-md-6 col-6 post-16317 product type-product status-publish has-post-thumbnail product_author-alyce-kris product_brand-slocan product_cat-fantasy product_cat-romance product_tag-hot product_tag-men first instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="products-entry content-product1 clearfix product-wapper">
                                        <div class="products-thumb">
                                            <div class='product-lable'>
                                                @if($b->unggulan == 'ya')
                                                <div class="vgwc-label vgwc-featured hot">Unggulan</div>
                                                @endif
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
                                                <div class="list-author">By : <span class="item-author"><a href="../product_author/alyce-kris/index.html">{{$b->author->name ?? ''}}</a></span></div>
                                                <h3 class="product-title"><a href="{{route('majalah.detail',[$b->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $b->title))])}}">{{$b->title}}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                <li id="dumpbaru"></li>
                            </ul>
                        </div>
                        @if($book->total() > 20)
                        <div class="woocommerce-load-more" style="">
                            <p align="center">
                                <button type="button" id="loading-lagi" value="2" class="elementor-button-link elementor-button elementor-size-sm"> Load More </button>
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@section('scripts')

<script>
    const domain = document.location.origin;
    const token = $("meta[name=csrf-token]").attr("content");
    if (
        $("#loading-lagi").click(function() {
            var pageContent = $("#loading-lagi").val();
            var category = "{{$category->id}}"
            $.post(
                domain + "/majalah/load-more", {
                    _token: token
                    , page: pageContent
                    , category: category
                },

                function(data, status, jqXHR) {
                    const itemmm = data.data;

                    $.each(itemmm, function(key, value) {
                        const listItem =
                            `<li class="col-xl-3 col-lg-4 col-md-6 col-6 post-16317 product type-product status-publish has-post-thumbnail product_author-alyce-kris product_brand-slocan product_cat-fantasy product_cat-romance product_tag-hot product_tag-men first instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="products-entry content-product1 clearfix product-wapper">
                                        <div class="products-thumb">
                                            <div class='product-lable'>
                                               ` + value.unggulan + `
                                            </div>
                                            <div class="product-thumb-hover">
                                                <a href="` + value.link + `" class="woocommerce-LoopProduct-link">
                                                    <img width="480" height="693" src="` + value.image + `" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                                                    <img width="480" height="693" src="` + value.image + `" class="hover-image back" alt="" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class='product-button'>
                                                <span class="product-quickview">
                                                    <a href="` + value.link + `" class="quickview quickview-button quickview-16317">Quick View <i class="icon-view"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="products-content">
                                            <div class="contents">
                                                <div class="">
                                                    <div class=""></div>
                                                    <div class=""><i class="fa fa-eye"></i> (` + value.viewer + ` )</div>
                                                </div>
                                                <div class="list-author">By : <span class="item-author"><a href="../product_author/alyce-kris/index.html">` + value.author + `</a></span></div>
                                                <h3 class="product-title"><a href="` + value.link + `">` + value.title + `</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>`;
                        $("#dumpbaru").before(listItem);
                    });

                    if (itemmm == 0) {
                        $("#loading-lagi").attr("style", "display:none;");
                    }

                    var addPage = parseInt(pageContent) + parseInt(1);
                    $("#loading-lagi").val(addPage);
                }
                , "json"
            );
        })
    );

</script>
@endsection
