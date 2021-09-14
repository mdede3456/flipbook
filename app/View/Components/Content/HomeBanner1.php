<?php

namespace App\View\Components\Content;

use App\Models\Frontend\BannerSite;
use Illuminate\View\Component;

class HomeBanner1 extends Component
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
        $banner = BannerSite::where("position","home1")->get();
        return view('components.content.home-banner1',compact('banner'));
    }
}
