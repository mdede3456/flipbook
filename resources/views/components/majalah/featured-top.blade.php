@if($book != null)
<div class="item-product">
    <div class="items">
        <div class="products-entry content-product1 clearfix product-wapper">
            <div class="products-thumb">
                <div class='product-lable'>
                    <div class="vgwc-label vgwc-featured hot">Hot</div>
                </div>
                <div class="product-thumb-hover">
                    <a href="{{route('majalah.detail',[$book->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->title))])}}" class="woocommerce-LoopProduct-link">
                        <img width="480" height="693" src="{{asset($book->thumbnail)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" loading="lazy" />
                        <img width="480" height="693" src="{{asset($book->thumbnail)}}" class="hover-image back" alt="" loading="lazy" />
                    </a>
                </div>
                <div class='product-button'>
                    <span class="product-quickview">
                        <a href="{{route('majalah.detail',[$book->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->title))])}}" data-title="Quick View" data-product_id="16541" class="quickview quickview-button quickview-16541">Detail <i class="icon-view"></i></a>
                    </span>
                </div>
            </div>
            <div class="products-content">
                <div class="contents">
                    <div class="">
                        <div class=""></div>
                        <div class=" "><i class="fa fa-eye"></i> ( {{count($book->viewer)}} )</div>
                    </div>
                    <div class="list-author">By : <span class="item-author"><a href="{{route('author.detail',[$book->author_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->author->name ?? 'none'))])}}">{{$book->author->name ?? ''}}</a></span></div>
                    <h3 class="product-title"><a href="{{route('majalah.detail',[$book->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->title))])}}">{{$book->title}}</a></h3>

                </div>
            </div>
        </div>
    </div>
</div>
@endif