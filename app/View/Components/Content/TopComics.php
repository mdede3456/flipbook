<?php

namespace App\View\Components\Content;

use App\Models\Manga\Komik;
use Illuminate\View\Component;

class TopComics extends Component
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
        $comic = Komik::limit(10)->get();
        return view('components.content.top-comics',compact('comic'));
    }
}
