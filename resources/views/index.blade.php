@extends('layouts.website')
@section('content')
<div id="main-content" class="main-content">
    <div id="primary" class="content-area container">
        <div id="content" class="site-content" role="main">
            <article id="post-9593" class="post-9593 page type-page status-publish hentry">
                <div class="entry-content clearfix">
                    <div data-elementor-type="wp-page" data-elementor-id="9593" class="elementor elementor-9593" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">

                                {{-- Slider Content --}}
                                <x-content.slider-component></x-content.slider-component>
                                {{-- End Slider Content --}}


                                {{-- Home Banner 1 --}}
                                <x-content.home-banner1></x-content.home-banner1>
                                {{-- End Home Banner 1 --}}

                                {{-- Home Featured --}}
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-580bf7c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="580bf7c" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-555c6b5" data-id="555c6b5" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-74043bc elementor-widget elementor-widget-heading" data-id="74043bc" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Buku Unggulan </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c370bd9" data-id="c370bd9" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-d46224c elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="d46224c" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="{{route('website.majalah')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve">
                                                                                    <polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5   345.606,368.713 476.213,238.106 "></polygon>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="elementor-button-text">Lihat Semua</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <x-content.featured-component></x-content.featured-component>
                                {{-- End Home Featured --}}

                                {{-- Top Category --}}
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-ea8927a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ea8927a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe8ddc4" data-id="fe8ddc4" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-348cb56 elementor-widget elementor-widget-heading" data-id="348cb56" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Top Kategori</h2>
                                                            </div>
                                                        </div>
                                                        <x-content.top-category></x-content.top-category>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                {{-- End Top Category --}}

                                {{-- Featured Comic --}}
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-977841c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="977841c" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7ce112b" data-id="7ce112b" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-d98ec66 elementor-widget elementor-widget-heading" data-id="d98ec66" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Komik Ongoing Saat Ini</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-53b859e" data-id="53b859e" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-2f89cf4 elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="2f89cf4" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve">
                                                                                    <polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5   345.606,368.713 476.213,238.106 "></polygon>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="elementor-button-text">Lihat Semua</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <x-content.comic-featured></x-content.comic-featured>
                                {{-- End Featured Comic --}}


                                {{-- Home Banner 2 --}}
                                <x-content.home-banner2></x-content.home-banner2>
                                {{-- End Home Banner 2 --}}

                                {{-- Top Book --}}
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-eca011a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="eca011a" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aef0c62" data-id="aef0c62" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-0243c68 elementor-widget elementor-widget-heading" data-id="0243c68" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Top Book</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-29bc390" data-id="29bc390" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-8b072d4 elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="8b072d4" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="{{route('website.majalah')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve">
                                                                                    <polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5   345.606,368.713 476.213,238.106 "></polygon>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="elementor-button-text">Lihat Semua</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <x-content.top-book></x-content.top-book>
                                {{-- End Top Book --}}

                                {{-- Top Video --}}
                                <x-content.top-video></x-content.top-video>
                                {{-- End Top Video --}}

{{-- Top Comic --}}
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-648dc9c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="648dc9c" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8ee2d8f" data-id="8ee2d8f" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-53233f7 elementor-widget elementor-widget-heading" data-id="53233f7" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Top Comic's</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b4429c" data-id="3b4429c" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-1fa6bce elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="1fa6bce" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve">
                                                                                    <polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5   345.606,368.713 476.213,238.106 "></polygon>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                    <g> </g>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="elementor-button-text">Lihat Semua</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <x-content.top-comics></x-content.top-comics>
{{-- End Top Comic --}}
                               

                                {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-49af6d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="49af6d9" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c728619 wpb-col-sm-50" data-id="c728619" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-c3c16e9 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="c3c16e9" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="-21 -71 682.66669 682">
                                                                                <path d="m126.25 85.75c3.285156 0 6.515625-1.335938 8.835938-3.660156 2.328124-2.324219 3.664062-5.554688 3.664062-8.839844s-1.335938-6.511719-3.664062-8.835938c-2.320313-2.324218-5.550782-3.664062-8.835938-3.664062s-6.515625 1.339844-8.835938 3.664062c-2.328124 2.324219-3.664062 5.550782-3.664062 8.835938s1.335938 6.515625 3.664062 8.839844c2.320313 2.324218 5.550782 3.660156 8.835938 3.660156zm0 0"></path>
                                                                                <path d="m173.125 85.75h83.125c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5h-83.125c-6.90625 0-12.5 5.597656-12.5 12.5 0 6.90625 5.59375 12.5 12.5 12.5zm0 0"></path>
                                                                                <path d="m126.25 165.75h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5h-130c-6.90625 0-12.5 5.597656-12.5 12.5 0 6.90625 5.59375 12.5 12.5 12.5zm0 0"></path>
                                                                                <path d="m126.25 245.75h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5h-130c-6.90625 0-12.5 5.597656-12.5 12.5 0 6.90625 5.59375 12.5 12.5 12.5zm0 0"></path>
                                                                                <path d="m126.25 325.75h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5h-130c-6.90625 0-12.5 5.597656-12.5 12.5 0 6.90625 5.59375 12.5 12.5 12.5zm0 0"></path>
                                                                                <path d="m268.75 393.25c0-6.902344-5.59375-12.5-12.5-12.5h-130c-6.90625 0-12.5 5.597656-12.5 12.5 0 6.90625 5.59375 12.5 12.5 12.5h130c6.90625 0 12.5-5.59375 12.5-12.5zm0 0"></path>
                                                                                <path d="m371.253906 73.25c0 6.90625 5.597656 12.5 12.5 12.5h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5h-130c-6.902344 0-12.5 5.597656-12.5 12.5zm0 0"></path>
                                                                                <path d="m513.753906 140.75h-130c-6.902344 0-12.5 5.597656-12.5 12.5 0 6.90625 5.597656 12.5 12.5 12.5h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5zm0 0"></path>
                                                                                <path d="m513.753906 220.75h-130c-6.902344 0-12.5 5.597656-12.5 12.5 0 6.90625 5.597656 12.5 12.5 12.5h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5zm0 0"></path>
                                                                                <path d="m513.753906 300.75h-130c-6.902344 0-12.5 5.597656-12.5 12.5 0 6.90625 5.597656 12.5 12.5 12.5h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5zm0 0"></path>
                                                                                <path d="m513.753906 380.75h-130c-6.902344 0-12.5 5.597656-12.5 12.5 0 6.90625 5.597656 12.5 12.5 12.5h130c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5zm0 0"></path>
                                                                                <path d="m627.5 64.5h-37.5v-55c0-6.902344-5.59375-12.5-12.5-12.5h-182.457031c-30.058594 0-57.605469 14.199219-75.042969 37.496094-17.4375-23.296875-44.984375-37.496094-75.042969-37.496094h-182.457031c-6.90625 0-12.5 5.597656-12.5 12.5v55h-37.5c-6.90625 0-12.5 5.597656-12.5 12.5v447.5c0 6.90625 5.59375 12.5 12.5 12.5h431.664062c6.90625 0 12.5-5.59375 12.5-12.5 0-6.902344-5.59375-12.5-12.5-12.5h-112.714843c.015625-.035156.03125-.074219.042969-.113281.015624-.023438.03125-.046875.039062-.070313 10.730469-25.703125 35.660156-42.316406 63.511719-42.316406h182.457031c6.90625 0 12.5-5.59375 12.5-12.5v-367.5h25v422.5h-68.640625c-6.90625 0-12.5 5.597656-12.5 12.5 0 6.90625 5.59375 12.5 12.5 12.5h81.140625c6.90625 0 12.5-5.59375 12.5-12.5v-447.5c0-6.902344-5.59375-12.5-12.5-12.5zm-552.5-42.5h169.957031c27.042969 0 51.332031 15.660156 62.542969 40.101562v406.226563c-16.835938-15.0625-38.921875-23.828125-62.542969-23.828125h-169.957031zm-50 67.5h25v367.5c0 6.90625 5.59375 12.5 12.5 12.5h182.457031c27.851563 0 52.78125 16.613281 63.511719 42.316406.007812.023438.023438.046875.039062.070313.011719.039062.027344.078125.042969.113281h-283.550781zm540 355h-169.957031c-23.621094 0-45.707031 8.765625-62.542969 23.828125v-406.226563c11.210938-24.441406 35.5-40.101562 62.542969-40.101562h169.957031zm0 0"></path>
                                                                                <path d="m495.625 512c-3.285156 0-6.515625 1.339844-8.835938 3.664062-2.328124 2.324219-3.664062 5.550782-3.664062 8.835938s1.335938 6.515625 3.664062 8.839844c2.320313 2.324218 5.550782 3.660156 8.835938 3.660156s6.515625-1.335938 8.835938-3.660156c2.328124-2.324219 3.664062-5.554688 3.664062-8.839844s-1.335938-6.511719-3.664062-8.835938c-2.320313-2.324218-5.550782-3.664062-8.835938-3.664062zm0 0"></path>
                                                                            </svg> </span></div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title"> <span> Bookio Press </span></h3>
                                                                        <p class="elementor-icon-box-description"> Publish your book with B&N</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d219e5a elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="d219e5a" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper"> <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span> <span class="elementor-button-text">Learn more </span> </span> </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ce9389b wpb-col-sm-50" data-id="ce9389b" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-52eb289 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="52eb289" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                                <g>
                                                                                    <g>
                                                                                        <path d="M290.133,0H119.467C95.94,0,76.8,19.14,76.8,42.667v307.2c0,23.526,19.14,42.667,42.667,42.667h153.6v-17.067h-153.6    c-14.114,0-25.6-11.486-25.6-25.6v-307.2c0-14.114,11.486-25.6,25.6-25.6h170.667c14.114,0,25.6,11.486,25.6,25.6v247.467H332.8    V42.667C332.8,19.14,313.66,0,290.133,0z"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <path d="M414.643,227.294l-83.712-104.619l-13.338,10.667l83.712,104.61c10.863,13.568,16.836,30.618,16.828,48v208.981H293.291    c-44.083,0-79.957-35.866-79.957-79.957V384h-17.067v30.976c0,53.495,43.529,97.024,97.024,97.024h133.376    c4.719,0,8.533-3.814,8.533-8.533V285.961C435.209,264.73,427.913,243.891,414.643,227.294z"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <path d="M221.833,201.242c5.99,0.171,11.563,2.662,15.667,7.014l114.68,121.856l12.433-11.699L249.916,196.548    c-7.245-7.672-17.05-12.066-27.597-12.365c-10.658-0.358-20.582,3.524-28.16,10.684c-0.094,0.094-0.777,0.742-0.862,0.836    c-14.583,14.626-15.565,37.581-2.261,53.436l73.498,86.784v26.402c-0.009,47.155,29.645,89.933,73.805,106.47l5.99-15.983    c-37.53-14.054-62.737-50.415-62.729-90.487V332.8c0-2.014-0.717-3.977-2.022-5.521l-75.494-89.148    c-7.552-8.994-6.997-22.059,1.707-30.771C210.142,203.247,215.825,201.207,221.833,201.242z"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <rect x="264.533" y="17.067" width="17.067" height="213.333"></rect>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <rect x="221.867" y="281.6" width="17.067" height="102.4"></rect>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <rect x="221.867" y="8.533" width="17.067" height="187.733"></rect>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <rect x="119.467" y="42.667" width="17.067" height="110.933"></rect>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <rect x="162.133" y="42.667" width="17.067" height="68.267"></rect>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <path d="M179.2,281.6H128c-4.71,0-8.533,3.814-8.533,8.533v51.2c0,4.719,3.823,8.533,8.533,8.533h51.2    c4.71,0,8.533-3.814,8.533-8.533v-51.2C187.733,285.414,183.91,281.6,179.2,281.6z M170.667,332.8h-34.133v-34.133h34.133V332.8z"></path>
                                                                                    </g>
                                                                                </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                                <g> </g>
                                                                            </svg> </span></div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title"> <span> Bookio Mastercard® </span></h3>
                                                                        <p class="elementor-icon-box-description"> 5% Back on All B&N Purchases</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-97cf881 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="97cf881" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper"> <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span> <span class="elementor-button-text">Learn more </span> </span> </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2ff251d wpb-col-sm-50 m-t-30" data-id="2ff251d" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-cb190ee elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="cb190ee" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                                <g>
                                                                                    <circle cx="181" cy="70" r="10"></circle>
                                                                                    <path d="m261 213.57c0 25.307 20.118 42.288 47.963 65.791 4.946 4.175 10.061 8.491 15.487 13.195 1.88 1.629 4.215 2.443 6.55 2.443s4.671-.814 6.55-2.443c5.448-4.723 10.582-9.056 15.546-13.246 25.283-21.342 47.904-39.273 47.904-65.74 0-23.871-17.57-42.57-40-42.57-14.274 0-23.845 7.208-30 14.925-6.155-7.717-15.726-14.925-30-14.925-22.43 0-40 18.699-40 42.57zm60.362-3.901c1.2 4.332 5.136 7.357 9.63 7.357 4.495 0 8.431-2.973 9.63-7.305.222-.764 5.583-18.721 20.378-18.721 12.99 0 20 11.629 20 22.57 0 18.035-22.425 34.942-40.805 50.457-2.991 2.524-6.042 5.1-9.195 7.788-3.133-2.67-6.165-5.229-9.137-7.737-25.482-21.509-40.863-34.491-40.863-50.508 0-10.941 7.01-22.57 20-22.57 14.795 0 20.156 17.957 20.362 18.669z"></path>
                                                                                    <path d="m221 442c0-5.522-4.478-10-10-10h-60c-5.522 0-10 4.478-10 10s4.478 10 10 10h60c5.522 0 10-4.478 10-10z"></path>
                                                                                    <circle cx="181" cy="502" r="10"></circle>
                                                                                    <path d="m271 0h-180c-22.056 0-40 17.944-40 40v432c0 22.056 17.944 40 40 40h45c5.522 0 10-4.478 10-10s-4.478-10-10-10h-45c-11.028 0-20-8.972-20-20v-432c0-11.028 8.972-20 20-20h180c11.028 0 20 8.972 20 20v62.273c-53.368 17.194-90 66.996-90 123.727 0 22.694 6.13 45.087 17.77 65.06l-17.257 51.778c-1.197 3.594-.262 7.555 2.416 10.233 2.679 2.678 6.638 3.612 10.233 2.416l51.777-17.256c8.001 4.668 16.394 8.444 25.061 11.308v122.461c0 11.028-8.972 20-20 20h-45c-5.522 0-10 4.478-10 10s4.478 10 10 10h45c22.056 0 40-17.944 40-40v-117.588c6.611 1.051 13.3 1.588 20 1.588 71.683 0 130-58.317 130-130s-58.317-130-130-130c-6.72 0-13.409.52-20 1.537v-57.537c0-22.056-17.944-40-40-40zm60 116c60.654 0 110 49.346 110 110s-49.346 110-110 110c-20.878 0-40.909-6.065-58.488-17.173-2.535-1.604-5.657-1.983-8.504-1.034l-37.198 12.397 12.397-37.198c.948-2.846.569-5.967-1.033-8.503-11.236-17.785-17.174-38.01-17.174-58.489 0-60.574 48.946-110 110-110z"></path>
                                                                                </g>
                                                                            </svg> </span></div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title"> <span> Download the App </span></h3>
                                                                        <p class="elementor-icon-box-description"> Millions of eBooks to Instantly</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5429b4c elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="5429b4c" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper"> <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span> <span class="elementor-button-text">Learn more </span> </span> </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-338c13e wpb-col-sm-50 m-t-30" data-id="338c13e" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-ad0e819 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="ad0e819" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512.00139">
                                                                                <path d="m437.535156 113.511719h-60.292968c13.039062-11.847657 21.953124-28.125 24.171874-46.632813 1.238282-10.304687.195313-19.933594-3.015624-27.84375-11.597657-28.578125-49.078126-44.859375-85.328126-37.074218-.292968.0625-.582031.140624-.871093.226562-21.425781 6.660156-44.445313 28.652344-68.421875 65.363281-8.164063 12.496094-15 24.507813-19.992188 33.816407-4.992187-9.308594-11.828125-21.320313-19.988281-33.816407-23.976563-36.710937-47-58.703125-68.421875-65.363281-.289062-.085938-.578125-.164062-.871094-.226562-18.378906-3.949219-37.535156-1.8906255-53.941406 5.789062-5.019531 2.351562-7.183594 8.328125-4.832031 13.347656 2.351562 5.023438 8.324219 7.1875 13.347656 4.835938 12.140625-5.6875 26.96875-7.296875 40.753906-4.4375 29.070313 9.433594 61.3125 60.890625 77.730469 92.015625h-85.140625c-22.242187 0-42.542969-12.835938-51.714844-32.707031-2.324219-5.03125-8.285156-7.230469-13.320312-4.90625-5.035157 2.324218-7.230469 8.289062-4.90625 13.324218 4.316406 9.355469 10.449219 17.5625 17.871093 24.289063h-60.3125c-5.542968 0-10.039062 4.496093-10.039062 10.039062v103.308594c0 5.546875 4.496094 10.039063 10.039062 10.039063h11.117188v265.0625c0 5.546874 4.496094 10.039062 10.039062 10.039062h385.179688c5.546875 0 10.039062-4.492188 10.039062-10.039062v-265.0625h11.121094c5.542969 0 10.039063-4.492188 10.039063-10.039063v-103.308594c0-5.542969-4.496094-10.039062-10.039063-10.039062zm-119.796875-92.015625c26.425781-5.484375 54.191407 5.710937 62.054688 25.085937 1.9375 4.773438 2.519531 10.964844 1.6875 17.90625-3.355469 27.949219-27.570313 49.023438-56.328125 49.023438h-85.144532c16.398438-31.125 48.625-82.566407 77.730469-92.015625zm-297.660156 195.324218v-83.230468h122.253906v83.230468zm245.324219 275.101563h-224.167969v-255.023437h120.859375v184.75c0 5.546874 4.492188 10.039062 10.039062 10.039062 5.542969 0 10.039063-4.492188 10.039063-10.039062v-184.75h83.230469zm19.761718-275.101563h-122.753906v-83.230468h122.753906zm121.175782 275.101563h-120.859375v-255.023437h120.855469v255.023437zm21.15625-275.101563h-122.253906v-83.230468h122.253906zm0 0"></path>
                                                                                <path d="m182.175781 461.796875c0 5.566406-4.511719 10.078125-10.078125 10.078125s-10.078125-4.511719-10.078125-10.078125 4.511719-10.078125 10.078125-10.078125 10.078125 4.511719 10.078125 10.078125zm0 0"></path>
                                                                                <path d="m68.617188 45.757812c0 5.566407-4.511719 10.078126-10.078126 10.078126-5.566406 0-10.078124-4.511719-10.078124-10.078126 0-5.566406 4.511718-10.078124 10.078124-10.078124 5.566407 0 10.078126 4.511718 10.078126 10.078124zm0 0"></path>
                                                                            </svg> </span></div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title"> <span> Give a Gift Card </span></h3>
                                                                        <p class="elementor-icon-box-description"> The Perfect Gift for Everyone</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c41bb4b elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="c41bb4b" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper"> <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span> <span class="elementor-button-text">Learn more </span> </span> </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
