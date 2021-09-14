<?php

namespace App\View\Components\Content;

use App\Models\Flipbook\CategoryFlipbook;
use Illuminate\View\Component;

class TopCategory extends Component
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
        $category = CategoryFlipbook::all();
        return view('components.content.top-category',compact('category'));
    }
}
