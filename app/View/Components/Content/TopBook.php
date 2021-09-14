<?php

namespace App\View\Components\Content;

use App\Models\FlipBook;
use Illuminate\View\Component;

class TopBook extends Component
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
        $top = FlipBook::limit(5)->get();
        $other = FlipBook::limit(8)->get();
        return view('components.content.top-book',compact('top','other'));
    }
}
