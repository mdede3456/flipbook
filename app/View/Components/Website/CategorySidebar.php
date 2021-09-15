<?php

namespace App\View\Components\Website;

use App\Models\Flipbook\CategoryFlipbook;
use Illuminate\View\Component;

class CategorySidebar extends Component
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
        $category = CategoryFlipbook::orderBy("id",'desc')->limit(10)->get();
        return view('components.website.category-sidebar',compact('category'));
    }
}
