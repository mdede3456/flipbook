@extends('layouts.website')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/bundles/jq-3d-flip-book/css/flipbook.style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bundles/jq-3d-flip-book/css/font-awesome.css') }}">
@endsection

@section('content')
<div class="content-single-sidebar">
    <div class="container">
        <div class="content-image-single">
            <div class="content-info">
                <div class="cat-links">
                    <a href="{{route('majalah.category',[$book->category_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->category->name ?? 'none'))])}}" rel="category tag">{{$book->category->name ?? ''}}</a>,
                </div>
                <h3 class="entry-title">{{$book->title}}</h3>
                <div class="entry-by entry-meta">
                    <div class="entry-author">
                        <span class="entry-meta-link">
                            <i class="wpb-icon-user"></i>
                            <a href="{{route('author.detail',[$book->author_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $book->author->name ?? 'none'))])}}" title="Posts by Wpbingo" rel="author">{{$book->author->name ?? ''}}</a>
                        </span>
                    </div>
                    <div class="comments-link">
                        <i class="fa fa-eye"></i> <a href="#respond"> ( {{count($book->viewer)}} )<span> Dilihat / Dibaca</span> </a>
                    </div>
                </div>
            </div>
            <div class="entry-thumb single-thumb">
                <div style="height: 750px;"   id="reading" />
            </div>
        </div>
        <div class="single-post-content row">
            <div class="bwp-sidebar sidebar-blog col-xl-3 col-lg-3 col-md-12 col-12">
                <aside id="search-3" class="widget widget_search">
                    <h3 class="widget-title">Pencarian</h3>
                    <form role="search" method="GET" class="search-from" action="{{route('majalah.search')}}">
                        <div class="container">
                            <div class="form-content"> <input type="text" value="" name="name" class="s" placeholder="Cari Majalah / Buku..." />
                                <button id="searchsubmit" class="btn" type="submit"> <i class="icon_search"></i> <span>Cari</span> </button>
                            </div>
                        </div>
                    </form>
                </aside>
                <x-website.category-sidebar></x-website.category-sidebar>
                {{-- <aside id="bwp_recent_post_widget-2" class="widget bwp_recent_post_widget">
                    <div class="bwp-recent-post sidebar">
                        <div class="block">
                            <h2 class="widget-title">Majalah Terbaru</h2>
                            <div class="block_content">
                                <div id="recent_post_18865192471631300033" class="row">
                                    @foreach($news as $n)
                                    <div class="post-grid col-xl-12 col-lg-12 col-md-12 col-12 post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                                        <div class="item">
                                            <a class="post-thumbnail" href="{{route('majalah.detail',[$n->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $n->title))])}}" aria-hidden="true">
                                                <img width="500" height="500" src="{{asset($n->thumbnail)}}" class="attachment-bookio-blog-sidebar size-bookio-blog-sidebar wp-post-image" alt="{{$n->title}}" loading="lazy" /> </a>
                                            <div class="post-content">
                                                <div class="meta-date"><i class="icon-clock"></i><time class="entry-date">{{ $n->created_at->format('d M Y - H:i:s') }}</time></div>
                                                <h2 class="entry-title"><a href="{{route('majalah.detail',[$n->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $n->title))])}}">{{$n->title}}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </aside> --}} 
            </div>
            <div class="post-single sidebar col-xl-9 col-lg-9 col-md-12 col-12">
                <article id="post-3976" style="margin-top:25px;" class="post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                    <div class="post-content">
                        <div class="post-excerpt clearfix">
                            <?=$book->description;?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="post-content-entry">
                        <div class="tags-links"><label>Tags :</label>
                            @if($book->tag != null)
                            @php
                            $tags = explode(",",$book->tag);
                            @endphp
                            @foreach($tags as $t)
                            <a href="javascript:void(0)" rel="tag">{{$t}}</a>
                            @endforeach
                            @endif
                        </div>
                        <div class="entry-social-share"> <label>Share :</label>
                            <div class="social-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" title="Facebook" class="share-facebook" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet/?text={{$book->title}}&url={{url()->current()}}" target="_blank" title="Twitter" class="share-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{$book->title}}%0A%0A{{url()->current()}}" target="_blank" title="Whatsapp" class="share-linkedin">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <x-majalah.related-component></x-majalah.related-component>
                </article>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts') 
<script src="{{ asset('assets/bundles/jq-3d-flip-book/js/flipbook.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $("#reading").flipBook({
            pdfUrl: '{{ asset($book->file) }}',
           backgroundColor:"#fff"
        })
    })

</script>
@endsection
