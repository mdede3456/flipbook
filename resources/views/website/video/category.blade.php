@extends('layouts.website')
@section('content')

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    
        <div class="container">

          <x-content.category-banner></x-content.category-banner>
          
               <div class="category-posts row">
            <div class="bwp-sidebar sidebar-blog col-xl-3 col-lg-3 col-md-12 col-12">
                <aside id="search-3" class="widget widget_search">
                    <h3 class="widget-title">Search</h3>
                    <form role="search" method="get" id="searchform" class="search-from" action="https://wpbingosite.com/wordpress/bookio/">
                        <div class="container">
                            <div class="form-content"> <input type="text" value="" name="s" class="s" placeholder="Search..." /> <button id="searchsubmit" class="btn" type="submit"> <i class="icon_search"></i> <span>Search</span> </button></div>
                        </div>
                    </form>
                </aside>
                <aside id="categories-10" class="widget widget_categories">
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                        <li class="cat-item cat-item-60 current-cat"><a aria-current="page" href="index.html">Backpack</a> (8)</li>
                        <li class="cat-item cat-item-121"><a href="../fashion/index.html">Fashion</a> (4)</li>
                        <li class="cat-item cat-item-100"><a href="../life-style/index.html">Life Style</a> (4)</li>
                        <li class="cat-item cat-item-39"><a href="../shorts/index.html">Shorts</a> (5)</li>
                        <li class="cat-item cat-item-42"><a href="../swimwear/index.html">Swimwear</a> (4)</li>
                    </ul>
                </aside>
                <aside id="bwp_recent_post_widget-2" class="widget bwp_recent_post_widget">
                    <div class="bwp-recent-post sidebar">
                        <div class="block">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="block_content">
                                <div id="recent_post_15697222371631300026" class="row">
                                    <div class="post-grid col-xl-12 col-lg-12 col-md-12 col-12 post-3976 post type-post status-publish format-standard has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-hot tag-trend">
                                        <div class="item"> <a class="post-thumbnail" href="../../2018/05/30/traveling-solo-is-awesome/index.html" aria-hidden="true"> <img width="500" height="500" src="../../wp-content/uploads/2018/05/Untitled-2_01-1-500x500.jpg" class="attachment-bookio-blog-sidebar size-bookio-blog-sidebar wp-post-image" alt="Traveling Solo Is Awesome" loading="lazy" /> </a>
                                            <div class="post-content">
                                                <div class="meta-date"><i class="icon-clock"></i><time class="entry-date" datetime="2018-05-30T04:42:28+00:00">May 30, 2018</time></div>
                                                <h2 class="entry-title"><a href="../../2018/05/30/traveling-solo-is-awesome/index.html">Traveling Solo Is Awesome</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-grid col-xl-12 col-lg-12 col-md-12 col-12 post-3974 post type-post status-publish format-image has-post-thumbnail hentry category-backpack category-fashion category-shorts tag-459 post_format-post-format-image">
                                        <div class="item"> <a class="post-thumbnail" href="../../2018/05/30/a-beautiful-sunday-morning/index.html" aria-hidden="true"> <img width="500" height="500" src="../../wp-content/uploads/2018/05/Untitled-2_02-1-500x500.jpg" class="attachment-bookio-blog-sidebar size-bookio-blog-sidebar wp-post-image" alt="A Beautiful Sunday Morning" loading="lazy" /> </a>
                                            <div class="post-content">
                                                <div class="meta-date"><i class="icon-clock"></i><time class="entry-date" datetime="2018-05-30T04:40:39+00:00">May 30, 2018</time></div>
                                                <h2 class="entry-title"><a href="../../2018/05/30/a-beautiful-sunday-morning/index.html">A Beautiful Sunday Morning</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-grid col-xl-12 col-lg-12 col-md-12 col-12 post-3971 post type-post status-publish format-image has-post-thumbnail hentry category-backpack category-fashion category-life-style tag-476 post_format-post-format-image">
                                        <div class="item"> <a class="post-thumbnail" href="../../2018/05/30/kitchen-inspired-on-japanese/index.html" aria-hidden="true"> <img width="500" height="500" src="../../wp-content/uploads/2018/05/Untitled-2_03-1-500x500.jpg" class="attachment-bookio-blog-sidebar size-bookio-blog-sidebar wp-post-image" alt="Kitchen inspired on Japanese" loading="lazy" /> </a>
                                            <div class="post-content">
                                                <div class="meta-date"><i class="icon-clock"></i><time class="entry-date" datetime="2018-05-30T04:33:26+00:00">May 30, 2018</time></div>
                                                <h2 class="entry-title"><a href="../../2018/05/30/kitchen-inspired-on-japanese/index.html">Kitchen inspired on Japanese</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside id="archives-3" class="widget widget_archive">
                    <h3 class="widget-title">Archives</h3>
                    <ul>
                        <li><a href='../../2018/05/index.html'>May 2018</a></li>
                        <li><a href='../../2017/04/index.html'>April 2017</a></li>
                    </ul>
                </aside>
                <aside id="tag_cloud-7" class="widget widget_tag_cloud">
                    <h3 class="widget-title">Tags</h3>
                    <div class="tagcloud"><a href="../../tag/2020/index.html" class="tag-cloud-link tag-link-476 tag-link-position-1" style="font-size: 8pt;" aria-label="2020 (1 item)">2020</a> <a href="../../tag/2021/index.html" class="tag-cloud-link tag-link-459 tag-link-position-2" style="font-size: 22pt;" aria-label="2021 (3 items)">2021</a> <a href="../../tag/dried/index.html" class="tag-cloud-link tag-link-477 tag-link-position-3" style="font-size: 8pt;" aria-label="Dried (1 item)">Dried</a> <a href="../../tag/hot/index.html" class="tag-cloud-link tag-link-458 tag-link-position-4" style="font-size: 8pt;" aria-label="Hot (1 item)">Hot</a> <a href="../../tag/mimimal/index.html" class="tag-cloud-link tag-link-349 tag-link-position-5" style="font-size: 8pt;" aria-label="Mimimal (1 item)">Mimimal</a> <a href="../../tag/simple/index.html" class="tag-cloud-link tag-link-350 tag-link-position-6" style="font-size: 8pt;" aria-label="Simple (1 item)">Simple</a> <a href="../../tag/trend/index.html" class="tag-cloud-link tag-link-457 tag-link-position-7" style="font-size: 8pt;" aria-label="Trend (1 item)">Trend</a> <a href="../../tag/vitamin/index.html" class="tag-cloud-link tag-link-487 tag-link-position-8" style="font-size: 8pt;" aria-label="Vitamin (1 item)">Vitamin</a></div>
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
                                            <a href="../../2018/05/30/traveling-solo-is-awesome/index.html" rel="bookmark">
                                                <time class="entry-date published" datetime="2018-05-30T04:42:28+00:00">
                                                    <span class="day">30</span>
                                                    <span class="month">May</span>
                                                </time>
                                                <time class="updated" datetime="2021-08-18T09:36:30+00:00">
                                                    <span class="day">30</span>
                                                    <span class="month">May</span>
                                                </time>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cat-links"><a href="index.html" rel="category tag">Backpack</a>, <a href="../fashion/index.html" rel="category tag">Fashion</a>, <a href="../life-style/index.html" rel="category tag">Life Style</a></div>
                                    <h3 class="entry-title"><a href="../../2018/05/30/traveling-solo-is-awesome/index.html">Traveling Solo Is Awesome</a></h3>
                                    <div class="entry-meta-head">
                                        <div class="entry-author"> <span class="entry-meta-link">By : <a href="../../author/wpbingo/index.html" title="Posts by Wpbingo" rel="author">Wpbingo</a></span></div> <span class="comments-link"> 4<span> Comments</span> </span>
                                    </div> <a class="read-more" href="../../2018/05/30/traveling-solo-is-awesome/index.html">Continue reading</a>
                                </div>
                                <div class="entry-thumb single-thumb"> <a class="post-thumbnail" href="../../2018/05/30/traveling-solo-is-awesome/index.html" title="Traveling Solo Is Awesome"> 
                                <img width="1440" height="900" src="{{asset($v->thumbnail)}}" class="attachment-bookio-full-width size-bookio-full-width wp-post-image" alt="" loading="lazy" /> </a></div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                    <nav class="navigation paging-navigation" role="navigation">
                        <h1 class="screen-reader-text">Posts navigation</h1>
                        <div class="pagination loop-pagination">
                            <ul class='page-numbers'>
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="page/2/indexcb45.html?layout_blog=list">2</a></li>
                                <li><a class="next page-numbers" href="page/2/indexcb45.html?layout_blog=list">Next</a></li>
                            </ul>
                        </div>
                    </nav>
                </section>
            </div>
        </div>
        </div>
    </main>
     
</div>

@endsection
