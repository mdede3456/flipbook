 @foreach($banner as $b)
<section class="elementor-section elementor-top-section elementor-element elementor-element-498e2b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="498e2b6" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-232cc32" data-id="232cc32" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                       
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-d584417 elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="background-image: url({{asset($b->banner)}});">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1271bbc" data-id="1271bbc" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-0528b7e elementor-widget elementor-widget-text-editor" data-id="0528b7e" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9d96280 elementor-widget elementor-widget-heading" data-id="9d96280" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">{{$b->title}}</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a5fbe67 elementor-align-center elementor-widget elementor-widget-button" data-id="a5fbe67" data-element_type="widget" data-widget_type="button.default">
                                                  
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
    </div>
</section>
 @endforeach
