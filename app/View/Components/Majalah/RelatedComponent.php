<?php

namespace App\View\Components\Majalah;

use App\Models\FlipBook;
use Illuminate\View\Component;

class RelatedComponent extends Component
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
        $majalah = FlipBook::where("status", 1)->orderBy("id", "desc")->limit(4)->get();
        return view('components.majalah.related-component',compact('majalah'));
    }
}
