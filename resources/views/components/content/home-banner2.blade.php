 @foreach($banner as $b)
<section class="elementor-section elementor-top-section elementor-element elementor-element-8259287 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8259287" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9b63071" data-id="9b63071" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">

                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-efe4c1e elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="background-image: url({{asset($b->banner)}});">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7994ee1" data-id="7994ee1" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-fcb63fa elementor-widget elementor-widget-heading" data-id="fcb63fa" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?=$b->title;?></h2>
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
    </div>
</section>
@endforeach