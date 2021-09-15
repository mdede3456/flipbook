<?php

namespace App\View\Components\Content;

use App\Models\FlipBook;
use Illuminate\View\Component;

class FeaturedComponent extends Component
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
        $book = FlipBook::where("status",1)->where("unggulan","ya")->orderBy("id","desc")->limit(10)->get();
        return view('components.content.featured-component',compact('book'));
    }
}
