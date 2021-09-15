<?php

namespace App\View\Components\Majalah;

use App\Models\FlipBook;
use Illuminate\View\Component;

class FeaturedComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $content;

    public function __construct($content)
    {
        $this->content = $content; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $book = FlipBook::where("status",1)->where("id",$this->content)->first();
        return view('components.majalah.featured-component',compact("book"));
    }
}
