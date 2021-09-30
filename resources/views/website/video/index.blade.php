@extends('layouts.website')
@section('content')

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <div class="container">

            <x-content.category-banner></x-content.category-banner>
            <div id="content" class="site-content" role="main">
                <article id="post-9593" class="post-9593 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <div data-elementor-type="wp-page" data-elementor-id="9593" class="elementor elementor-9593" data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-580bf7c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="580bf7c" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-555c6b5" data-id="555c6b5" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-74043bc elementor-widget elementor-widget-heading" data-id="74043bc" data-element_type="widget" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">Video Unggulan </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </section>
                                    <x-content.featured-video></x-content.featured-video>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

                            {{-- End Home Featured --}}

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
                                                        <h3 class="entry-title" style="font-size:20px"><a href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">{{$v->title}}</a></h3>
                                                        <div class="entry-meta-head">
                                                            <div class="entry-author"> <span class="entry-meta-link">By : <a href="{{route('author.detail',[$v->author_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->author->name ?? 'none'))])}}" title="Posts by Wpbingo" rel="author">{{$v->author->name ?? ''}}</a></span></div> <span class="comments-link"> {{count($v->viewer)}}<span> Ditonton</span> | Publish : {{ $v->created_at->format('d') }} {{ $v->created_at->format('M') }}, {{ $v->created_at->format('Y') }}</span>
                                                        </div>
                                                        <a class="read-more" style="background-color:#064532" href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">Tonton Video</a>
                                                    </div>
                                                    <div class="entry-thumb single-thumb"> <a class="post-thumbnail" href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}" title="{{$v->title}}">
                                                            <img width="1440" style="border-radius:5%" height="900" src="{{asset($v->thumbnail)}}" class="attachment-bookio-full-width size-bookio-full-width wp-post-image" alt="" loading="lazy" /> </a>
                                                    </div>
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
                                        
                                        <h3 class="entry-title" style="font-size:20px"><a href="` + value.link + `">` + value.title + `</a></h3>
                                        <div class="entry-meta-head">
                                            <div class="entry-author"> <span class="entry-meta-link">By : <a href="` + value.author_link + `" title="Posts by Wpbingo" rel="author">` + value.author + `</a></span></div> <span class="comments-link"> ` + value.viewer + `<span> Ditonton</span> | Publish : ` + value.tanggal + ` ` + value.bulan + `</span>
                                        </div> <a class="read-more" style="background-color:#064532" href="` + value.link + `">Tonton Video</a>
                                    </div>
                                    <div class="entry-thumb single-thumb"> <a class="post-thumbnail" href="` + value.link + `" title="` + value.title + `">
                                        <img width="1440" height="900"  src="` + value.image + `" class="attachment-bookio-full-width size-bookio-full-width wp-post-image" alt="" loading="lazy" /> </a>
                                    </div>
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
