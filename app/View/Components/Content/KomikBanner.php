<?php

namespace App\View\Components\Content;

use App\Models\Frontend\BannerSite;
use Illuminate\View\Component;

class KomikBanner extends Component
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
        $banner = BannerSite::where("position","komik")->get();
        return view('components.content.komik-banner',compact("banner"));
    }
}
