<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link media="all" href="{{asset('frontend/cache/autoptimize/css/autoptimize_ae2acfd6ec8dbc59cf683295f6098c97.css')}}" rel="stylesheet" />
    <title>{{env("APP_NAME")}} - {{$page}}</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel='dns-prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel='stylesheet' id='dashicons-css' href='{{asset('frontend/css/dashicons.minf658.css?ver=5.8.1')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='bookio-fonts-css' href='https://fonts.googleapis.com/css?family=Lato%3Aital%2Cwght%400%2C100%3B0%2C300%3B0%2C400%3B0%2C700%3B0%2C900%3B1%2C100%3B1%2C300%3B1%2C400%3B1%2C700%3B1%2C900%7CLibre+Baskerville%3Aital%2Cwght%400%2C400%3B0%2C700%3B1%2C400&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='{{asset('frontend/uploads/elementor/css/custom-frontend.minff4e.css?ver=1629438506')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9482-css' href='{{asset('frontend/cache/autoptimize/css/autoptimize_single_1de32431cfd1e73f985902f743ba8878ff4e.css?ver=1629438506')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9593-css' href='{{asset('frontend/cache/autoptimize/css/autoptimize_single_6e876b0e27e2fca81daa5ec34842bc16a8c3.css?ver=1629712644')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Baskerville%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.1' type='text/css' media='all' />

    <script type="text/template" id="tmpl-unavailable-variation-template"><p>Sorry, this product is unavailable. Please choose a different combination.</p></script>
    <script type='text/javascript' src='{{asset('frontend/js/jquery/jquery.minaf6c.js?ver=3.6.0')}}' id='jquery-core-js'></script>


    <link rel="icon" href="{{asset('frontend/uploads/2021/08/cropped-80-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('frontend/uploads/2021/08/cropped-80-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('frontend/uploads/2021/08/cropped-80-180x180.png')}}" />

    @yield('style')
</head>

<body class="home page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-9593 theme-bookio woocommerce-no-js banners-effect-1 elementor-default elementor-kit-9482 elementor-page elementor-page-9593 dokan-theme-bookio">
    <div class="loading-gif">
        <div id="loader-gif"></div>
    </div>


    <div id='page' class="hfeed page-wrapper  ">
        <x-website.header-component></x-website.header-component> 
        @yield('content') 
        <x-website.footer-component></x-website.footer-component>
    </div>

    <x-modal.search-component></x-modal.search-component>
    <div class="bwp-quick-view"></div>
    <div class="back-top"> <i class="arrow_carrot-up"></i></div>


    <link rel='stylesheet' id='elementor-post-9121-css' href='{{asset('frontend/cache/autoptimize/css/autoptimize_single_8fabf361f50160510523223853524d79800a.css?ver=1629438507')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-12246-css' href='{{asset('frontend/cache/autoptimize/css/autoptimize_single_d18cd8d9bcbc80ca0166a9a235f2fe32800a.css?ver=1629438507')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-11196-css' href='{{asset('frontend/cache/autoptimize/css/autoptimize_single_94c48903e25b57893e2f89c8814096eb800a.css?ver=1629438507')}}' type='text/css' media='all' />
    <script type='text/javascript' src='{{asset('frontend/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7')}}' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='{{asset('frontend/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0')}}' id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        var wpcf7 = {
            "api": {
                "root": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-json\/"
                , "namespace": "contact-form-7\/v1"
            }
            , "cached": "1"
        };

    </script>


    <script type='text/javascript' id='ppress-frontend-script-js-extra'>
        var pp_ajax_form = {
            "ajaxurl": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-admin\/admin-ajax.php"
            , "confirm_delete": "Are you sure?"
            , "deleting_text": "Deleting..."
            , "deleting_error": "An error occurred. Please try again."
            , "nonce": "84a65036e0"
            , "disable_ajax_form": "false"
        };

    </script>


    <script type='text/javascript' id='dokan-i18n-jed-js-extra'>
        var dokan = {
            "ajaxurl": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-admin\/admin-ajax.php"
            , "nonce": "404ce5bf75"
            , "ajax_loader": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-content\/plugins\/dokan-lite\/assets\/images\/ajax-loader.gif"
            , "seller": {
                "available": "Available"
                , "notAvailable": "Not Available"
            }
            , "delete_confirm": "Are you sure?"
            , "wrong_message": "Something went wrong. Please try again."
            , "vendor_percentage": "100"
            , "commission_type": "percentage"
            , "rounding_precision": "6"
            , "mon_decimal_point": "."
            , "product_types": ["simple"]
            , "loading_img": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-content\/plugins\/dokan-lite\/assets\/images\/loading.gif"
            , "store_product_search_nonce": "528d1eff99"
            , "rest": {
                "root": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-json\/"
                , "nonce": "6607cfcab9"
                , "version": "dokan\/v1"
            }
            , "api": null
            , "libs": []
            , "routeComponents": {
                "default": null
            }
            , "routes": []
            , "urls": {
                "assetsUrl": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-content\/plugins\/dokan-lite\/assets"
            }
        };

    </script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false
                , "wpPreview": false
                , "isScriptDebug": false
            }
            , "i18n": {
                "shareOnFacebook": "Share on Facebook"
                , "shareOnTwitter": "Share on Twitter"
                , "pinIt": "Pin it"
                , "download": "Download"
                , "downloadImage": "Download image"
                , "fullscreen": "Fullscreen"
                , "zoom": "Zoom"
                , "share": "Share"
                , "playVideo": "Play Video"
                , "previous": "Previous"
                , "next": "Next"
                , "close": "Close"
            }
            , "is_rtl": false
            , "breakpoints": {
                "xs": 0
                , "sm": 480
                , "md": 768
                , "lg": 1200
                , "xl": 1440
                , "xxl": 1600
            }
            , "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile"
                        , "value": 767
                        , "default_value": 767
                        , "direction": "max"
                        , "is_enabled": true
                    }
                    , "mobile_extra": {
                        "label": "Mobile Extra"
                        , "value": 880
                        , "default_value": 880
                        , "direction": "max"
                        , "is_enabled": false
                    }
                    , "tablet": {
                        "label": "Tablet"
                        , "value": 1199
                        , "default_value": 1024
                        , "direction": "max"
                        , "is_enabled": true
                    }
                    , "tablet_extra": {
                        "label": "Tablet Extra"
                        , "value": 1200
                        , "default_value": 1200
                        , "direction": "max"
                        , "is_enabled": false
                    }
                    , "laptop": {
                        "label": "Laptop"
                        , "value": 1366
                        , "default_value": 1366
                        , "direction": "max"
                        , "is_enabled": false
                    }
                    , "widescreen": {
                        "label": "Widescreen"
                        , "value": 2400
                        , "default_value": 2400
                        , "direction": "min"
                        , "is_enabled": false
                    }
                }
            }
            , "version": "3.4.2"
            , "is_static": false
            , "experimentalFeatures": {
                "e_import_export": true
                , "landing-pages": true
                , "elements-color-picker": true
                , "admin-top-bar": true
            }
            , "urls": {
                "assets": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-content\/plugins\/elementor\/assets\/"
            }
            , "settings": {
                "page": []
                , "editorPreferences": []
            }
            , "kit": {
                "viewport_tablet": 1199
                , "active_breakpoints": ["viewport_mobile", "viewport_tablet"]
                , "global_image_lightbox": "yes"
                , "lightbox_enable_counter": "yes"
                , "lightbox_enable_fullscreen": "yes"
                , "lightbox_enable_zoom": "yes"
                , "lightbox_enable_share": "yes"
                , "lightbox_title_src": "title"
                , "lightbox_description_src": "description"
            }
            , "post": {
                "id": 2034
                , "title": "Bookio%20%E2%80%93%20Book%20Store%20WooCommerce%20WordPress%20Theme%20%E2%80%93%20Just%20another%20WordPress%20site"
                , "excerpt": "Blood bank canine teeth larynx occupational therapist oncologist optician plaque spinal tap stat strep screen violence joints symptoms x-ray yawn. Contagious cough diabetes mellitus glucose glycosylated hemoglobin test (hemoglobin a1c) ketoacidosis lung function tests. Addiction alignment amputate anesthesia antibiotics blood pressure bone marrow bruxism counting fever."
                , "featuredImage": "https:\/\/wpbingosite.com\/wordpress\/bookio\/wp-content\/uploads\/2019\/12\/tes-1.jpg')}}"
            }
        };

    </script>
    <script defer src="{{asset('frontend/cache/autoptimize/js/autoptimize_e6fc239fdcf1fd047886fb0c6b818184.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js" integrity="sha512-ywaT8M9b+VnJ+jNG14UgRaKg+gf8yVBisU2ce+YJrlWwZa9BaZAE5GK5Yd7CBcP6UXoAnziRQl40/u/qwVZi4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    @yield('scripts')
</body>

</html>
