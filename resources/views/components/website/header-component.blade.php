<header id='bwp-header' class="bwp-header header-v1">
    <div id="bwp-topbar" class="topbar-v1 hidden-sm hidden-xs">
        <div class="topbar-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 topbar-left hidden-sm hidden-xs">
                        <ul id="topbar_menu" class="menu">
                            <li id="menu-item-24855" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24855"><a href="{{route('web.about')}}">ABOUT US</a></li>
                            <li id="menu-item-24856" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24856">Selamat Datang Di {{$settings->name}}</li> 
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 topbar-right">
                        <div class="login-header"> <a href="{{route('login')}}"> <i class="icon-user"></i>SignIn Author </a></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                    <div class="navbar-header"> <button type="button" id="show-megamenu" class="navbar-toggle"> <span>Menu</span> </button></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center ">
                    <div class="wpbingoLogo"> <a href="{{route('web')}}"> <img src="{{asset($settings->logo)}}" alt="{{$settings->name}}" /> </a></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                    <div class="wpbingo-verticalmenu-mobile">
                        <div class="navbar-header"> <button type="button" id="show-verticalmenu" class="navbar-toggle"> <span>Vertical</span> </button></div>
                    </div> 
                </div>
            </div>
        </div>
        <x-website.footer-mobile></x-website.footer-mobile>
    </div>
    <div class="header-desktop">
        <div class="header-top">
            <div class="container">
                <div class="header-section">
                    <div class="wpbingoLogo"> <a href="{{route('web')}}"> <img src="{{asset($settings->logo)}}" alt="{{$settings->name}}" /> </a></div>
                    <div class="header-search-form">
                        <form role="search" method="GET" class="search-from ajax-search" action="{{route('global.search')}}">
                            
                            <div class="search-box"> 
                                <input type="text" name="name" value=""  class="input-search s" placeholder="Cari Buku Atau Video..." /> 
                            </div>  
                            <button id="searchsubmit2" class="btn" type="submit"> 
                                <span class="search-icon"> <i class="icon-loupe"></i> </span> <span>search</span> 
                            </button>
                        </form>
                    </div>
                    <div class="header-page-link">
                        <div class="address hidden-xs"> <a href="{{route('author.index')}}"><i class="fab fa-hotjar"></i>Top Author</a></div>
                         <div class="address hidden-xs"> <a href="#"><i class="fas fa-award"></i>Recomended</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class='header-wrapper' data-sticky_header="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 header-left content-header">
                        <div class="header-vertical-menu">
                            <div class="categories-vertical-menu hidden-sm hidden-xs accordion" data-textmore="Other" data-textclose="Close" data-max_number_1530="12" data-max_number_1200="7" data-max_number_991="7">
                                <h3 class="widget-title"><span class="icon-cate"></span>Kategori</h3>
                                <div class="verticalmenu">
                                    <div class="bwp-vertical-navigation primary-navigation navbar-mega">
                                        <div class="menu-vertical-menu-container">
                                            <ul id="menu-vertical-menu" class="menu">
                                            @foreach($category as $c)
                                                <li class="level-0 menu-item-12291 top-one menu-item menu-item-type-custom menu-item-object-custom  std-menu      ">
                                                    <a href="{{route('majalah.category',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}"><span class="menu-item-text"><i class="fas fa-arrow-circle-right"></i> {{$c->name}}</span></a>
                                                </li>  
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-header-main">
                            <div class="wpbingo-menu-mobile header-menu">
                                <div class="header-menu-bg">
                                    <div class="wpbingo-menu-wrapper">
                                        <div class="megamenu">
                                            <nav class="navbar-default">
                                                <div class="bwp-navigation primary-navigation navbar-mega" data-text_close="Close">
                                                    <div class="float-menu">
                                                        <nav id="main-navigation" class="std-menu clearfix">
                                                            <div class="menu-main-menu-container">
                                                                <ul id="menu-main-menu" class="menu">
                                                                    <li class="level-0 menu-item-22421 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9593 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor  std-menu      ">
                                                                        <a href="{{route('web')}}"><span class="menu-item-text">Home</span></a> 
                                                                    </li>
                                                                    <li class="level-0 menu-item-2985 menu-item menu-item-type-post_type menu-item-object-page  mega-menu mega-menu-fullwidth-width     ">
                                                                        <a href="{{route('website.majalah')}}"><span class="menu-item-text">Our Majalah</span></a> 
                                                                    </li>
                                                                    <li class="level-0 menu-item-2986 menu-item menu-item-type-taxonomy menu-item-object-category  mega-menu mega-menu-fullwidth-width     ">
                                                                        <a href="{{route('web.video')}}"><span class="menu-item-text">Our Video</span></a> 
                                                                    </li>
                                                                    <li class="level-0 menu-item-12288      menu-item menu-item-type-custom menu-item-object-custom std-menu      ">
                                                                        <a href="{{route("comic.index")}}"><span class="menu-item-text">Our Komik</span></a>
                                                                    </li> 
                                                                </ul>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 header-right">
                        <div class="ship hidden-xs hidden-sm">
                            <div class="content"> <label>NOTICE !</label>{{$settings->notice}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
