<?php

namespace App\View\Components\Website;

use App\Models\Admin\Setting;
use App\Models\Flipbook\CategoryFlipbook;
use Illuminate\View\Component;

class HeaderComponent extends Component
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
        $settings = Setting::first();
        $category = CategoryFlipbook::orderBy("name","desc")->get();
        return view('components.website.header-component',compact('settings','category'));
    }
}
