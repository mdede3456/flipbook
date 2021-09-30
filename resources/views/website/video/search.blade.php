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
                                         
                                        <h3 class="entry-title" style="font-size:20px"><a href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">{{$v->title}}</a></h3>
                                        <div class="entry-meta-head">
                                            <div class="entry-author"> <span class="entry-meta-link">By : <a href="{{route('author.detail',[$v->author_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->author->name ?? 'none'))])}}" title="Posts by Wpbingo" rel="author">{{$v->author->name ?? ''}}</a></span></div> <span class="comments-link"> {{count($v->viewer)}}<span> Ditonton</span> | Publish : {{ $v->created_at->format('d') }} {{ $v->created_at->format('M') }}, {{ $v->created_at->format('Y') }} </span>
                                        </div> <a class="read-more" style="background-color:#064532" href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}">Tonton Video</a>
                                    </div>
                                    <div class="entry-thumb single-thumb"> <a class="post-thumbnail" href="{{route('web.video_detail',[$v->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $v->title))])}}" title="{{$v->title}}">
                                            <img width="1440" style="border-radius:5%" height="900" src="{{asset($v->thumbnail)}}" class="attachment-bookio-full-width size-bookio-full-width wp-post-image" alt="" loading="lazy" /> </a></div>
                                </article>
                            </div>
                            @endforeach
                        </div>


                      
                    </section>
                </div>
            </div>
        </div>
    </main>

</div>

@endsection
