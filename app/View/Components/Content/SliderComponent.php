<?php

namespace App\View\Components\Content;

use App\Models\Frontend\Slider;
use Illuminate\View\Component;

class SliderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $slider = Slider::all();
        return view('components.content.slider-component',compact('slider'));
    }
}
