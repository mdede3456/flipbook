@if($book != null)
<div class="item">
    <div class="products-entry content-product1 clearfix product-wapper">
        <div class="products-thumb">
            <div class='product-lable'></div>
            <div class="product-thumb-hover">
                <a href="{{route('majalah.detail',[$book->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->title))])}}" class="woocommerce-LoopProduct-link">
                    <img width="480" height="693" src="{{asset($book->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                    <img width="480" height="693" src="{{asset($book->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
                </a>
            </div>
            <div class='product-button'>
                <span class="product-quickview">
                    <a href="{{route('majalah.detail',[$book->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->title))])}}" class="quickview quickview-button quickview-16317">Quick View <i class="icon-view"></i></a>
                </span>
            </div>
        </div>
        <div class="products-content">
            <div class="contents">
                <div class="">
                    <div class=""></div>
                    <div class=""><i class="fa fa-eye"></i> ( {{count($book->viewer)}} )</div>
                </div>
                <div class="list-author">By : <span class="item-author"><a href="../product_author/alyce-kris/index.html">{{$book->author->name ?? ''}}</a></span></div>
                <h3 class="product-title"><a href="{{route('majalah.detail',[$book->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->title))])}}">{{$book->title}}</a></h3>
            </div>
        </div>
    </div>
</div>

@endif
