@extends('layouts.website')
@section('content')

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <div class="container">

            <x-content.category-banner></x-content.category-banner>

            <div class="category-posts row">
                <div class="bwp-sidebar sidebar-blog col-xl-3 col-lg-3 col-md-12 col-12">

                    <aside id="categories-10" class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($cate as $c)
                            <li class="cat-item cat-item-60 current-cat"><a aria-current="page" href="{{route('web.video_category',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}">{{$c->name}}</a> ({{count($c->video)}})</li>
                            @endforeach
                        </ul>
                    </aside>

                </div>
                <div class="cate-post-content left col-xl-9 col-lg-9 col-md-12 col-12">
                    <section id="primary" class="content-area">
                        <div id="content" class="site-content blog-content-list" role="main">
                            @foreach($video as $v )
                            <div class="list-post">
                                <article id="post-3976" class="post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="post-date">
                                                <a href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}" rel="bookmark">
                                                    <time class="entry-date published" datetime="2018-05-30T04:42:28+00:00">
                                                        <span class="day">{{ $v->created_at->format('d') }}</span>
                                                        <span class="month">{{ $v->created_at->format('M') }}</span>
                                                    </time>
                                                    <time class="updated" datetime="{{ $v->created_at->format('Y-m-d:H:i:s') }}">
                                                        <span class="day">{{ $v->created_at->format('d') }}</span>
                                                        <span class="month">{{ $v->created_at->format('M') }}</span>
                                                    </time>
                                                </a>
                                            </div>
                                        </div>
                                       
                                        <h3 class="entry-title"><a href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">{{$v->title}}</a></h3>
                                        <div class="entry-meta-head">
                                            <div class="entry-author"> <span class="entry-meta-link">By : <a href="../../author/wpbingo/index.html" title="Posts by Wpbingo" rel="author">{{$v->author->name ?? ''}}</a></span></div> <span class="comments-link"> {{count($v->viewer)}}<span> Ditonton</span> </span>
                                        </div> <a class="read-more" href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">Tonton Video</a>
                                    </div>
                                    <div class="entry-thumb single-thumb"> <a class="post-thumbnail" href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}" title="{{$v->title}}">
                                            <img width="1440" height="900" src="{{asset($v->thumbnail)}}" class="attachment-bookio-full-width size-bookio-full-width wp-post-image" alt="" loading="lazy" /> </a></div>
                                </article>
                            </div>
                            @endforeach
                            <div id="dumpbaru"></div>
                        </div>


                        <nav class="navigation paging-navigation" role="navigation">
                            @if($video->total() > 20)
                            <div class="woocommerce-load-more" style="margin-top:10px; margin-bottom:10px;">
                                <p align="center">
                                    <button type="button" id="loading-lagi" value="2" class="elementor-button-link elementor-button elementor-size-sm"> Load More </button>
                                </p>
                            </div>
                            @endif
                        </nav>
                    </section>
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
            $.post(
                domain + "/video/load-more", {
                    _token: token
                    , page: pageContent
                    , category: null
                },

                function(data, status, jqXHR) {
                    const itemmm = data.data;

                    $.each(itemmm, function(key, value) {
                        const listItem =
                            `<div class="list-post">
                                <article id="post-3976" class="post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="post-date">
                                                <a href="`+ value.link +`" rel="bookmark">
                                                    <time class="entry-date published" datetime="2018-05-30T04:42:28+00:00">
                                                        <span class="day">`+ value.tanggal +`</span>
                                                        <span class="month">`+ value.bulan +`</span>
                                                    </time>
                                                    <time class="updated" datetime="`+ value.created_at +`">
                                                        <span class="day">`+ value.tanggal +`</span>
                                                        <span class="month">`+ value.bulan +`</span>
                                                    </time>
                                                </a>
                                            </div>
                                        </div>
                                      
                                        <h3 class="entry-title"><a href="`+ value.link +`">`+ value.title +`</a></h3>
                                        <div class="entry-meta-head">
                                            <div class="entry-author"> <span class="entry-meta-link">By : <a href="../../author/wpbingo/index.html" title="Posts by Wpbingo" rel="author">`+ value.author +`</a></span></div> <span class="comments-link"> `+ value.viewer +`<span> Ditonton</span> </span>
                                        </div> <a class="read-more" href="`+ value.link +`">Tonton Video</a>
                                    </div>
                                    <div class="entry-thumb single-thumb"> <a class="post-thumbnail" href="`+ value.link +`" title="`+ value.title +`">
                                            <img width="1440" height="900" src="`+ value.image +`" class="attachment-bookio-full-width size-bookio-full-width wp-post-image" alt="" loading="lazy" /> </a></div>
                                </article>
                            </div>`;
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