@extends('layouts.website')
@section('content')

<div class="content-single-sidebar">
    <div class="container">
        <div class="content-image-single">
            <div class="content-info"> 
                <h4 class="entry-title" style="font-size:20px;">{{$video->title}}</h4>
                <div class="entry-by entry-meta">
                    <div class="entry-author">
                        <span class="entry-meta-link">
                            <i class="wpb-icon-user"></i>
                            <a href="../../../../author/wpbingo/index.html" title="Posts by Wpbingo" rel="author">{{$video->author->name ?? ''}}</a>
                        </span>
                    </div>
                    <div class="comments-link">
                        <i class="fa fa-eye"></i> <a href="#respond"> ( {{count($video->viewer)}} )<span> Dilihat / Dibaca</span> </a>
                    </div>
                </div>
            </div>
            <div class="entry-thumb single-thumb">
                <p align="center">
                    <iframe width="1060" height="635"  src="https://www.youtube.com/embed/{{$video->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
        </div>
        <div class="single-post-content row">
            <div class="bwp-sidebar sidebar-blog col-xl-3 col-lg-3 col-md-12 col-12">
                <aside id="search-3" class="widget widget_search">
                    <h3 class="widget-title">Pencarian</h3>
                    <form role="search" method="GET" class="search-from" action="{{route('video.search')}}">
                        <div class="container">
                            <div class="form-content"> <input type="text" value="" name="name" class="s" placeholder="Cari Video..." />
                                <button id="searchsubmit" class="btn" type="submit"> <i class="icon_search"></i> <span>Cari</span> </button>
                            </div>
                        </div>
                    </form>
                </aside>
                <x-video.category-sidebar></x-video.category-sidebar>
                <aside id="bwp_recent_post_widget-2" class="widget bwp_recent_post_widget">
                    <div class="bwp-recent-post sidebar">
                        <div class="block">
                            <h2 class="widget-title">Video Terbaru</h2>
                            <div class="block_content">
                                <div id="recent_post_18865192471631300033" class="row">
                                    @foreach($newlest as $n)
                                    <div class="post-grid col-xl-12 col-lg-12 col-md-12 col-12 post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                                        <div class="item">
                                            <a class="post-thumbnail" href="{{route('web.video_detail',[$n->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $n->title))])}}" aria-hidden="true">
                                                <img width="500" height="500" src="{{asset($n->thumbnail)}}" class="attachment-bookio-blog-sidebar size-bookio-blog-sidebar wp-post-image" alt="{{$n->title}}" loading="lazy" /> </a>
                                            <div class="post-content">
                                                <div class="meta-date"><i class="icon-clock"></i><time class="entry-date">{{ $n->created_at->format('d M Y - H:i:s') }}</time></div>
                                                <h2 class="entry-title"><a href="{{route('web.video_detail',[$n->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $n->title))])}}">{{$n->title}}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </aside>


            </div>
            <div class="post-single sidebar col-xl-9 col-lg-9 col-md-12 col-12">
                <article id="post-3976" style="margin-top:25px;" class="post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                    <div class="post-content">
                        <div class="post-excerpt clearfix">
                            <?=$video->description;?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="post-content-entry">
                        <div class="tags-links"><label>Tags :</label>
                            @if($video->tag != null)
                            @php
                            $tags = explode(",",$video->tag);
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
                                <a href="https://twitter.com/intent/tweet/?text={{$video->title}}&url={{url()->current()}}" target="_blank" title="Twitter" class="share-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{$video->title}}%0A%0A{{url()->current()}}" target="_blank" title="Whatsapp" class="share-linkedin">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                </article>

            </div>
        </div>
    </div>
</div>

@endsection