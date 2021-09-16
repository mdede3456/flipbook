@extends('layouts.website')
@section('content')


<div id="bwp-main" class="bwp-main">
    <div data-bg_default="" class="page-title bwp-title empty-image">
        <div class="container">
            <div class="content-title-heading">
                <h1 class="text-title-heading"> Faq</h1>
            </div>
            <div id="breadcrumb" class="breadcrumb">
                <div class="bwp-breadcrumb"><a href="../index.html">Home</a> <span class="delimiter"></span> <span class="current">Faq</span></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="main-content" class="main-content">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            <article id="post-14474" class="post-14474 page type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div data-elementor-type="wp-page" data-elementor-id="14474" class="elementor elementor-14474" data-elementor-settings="[]">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                <section style="margin-top:20px;" class="elementor-section elementor-top-section elementor-element elementor-element-66e9c05 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66e9c05" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4170ba4" data-id="4170ba4" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-ca300dd elementor-view-default elementor-widget elementor-widget-icon" data-id="ca300dd" data-element_type="widget" data-widget_type="icon.default">
                                                                            <div class="elementor-widget-container">
                                                                                 
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ba7f0e9 title-block-1 elementor-widget elementor-widget-heading" data-id="ba7f0e9" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default" align="center">{{$policy->title}}</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-acbdb48 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="acbdb48" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2d2b84b" data-id="2d2b84b" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap"> 
                                                                        <div class="elementor-element elementor-element-19dfa4d elementor-widget elementor-widget-text-editor" data-id="19dfa4d" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                   <?=$policy->description;?>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </section> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
