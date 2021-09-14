<?php

namespace App\View\Components\Content;

use App\Models\Manga\Komik;
use Illuminate\View\Component;

class ComicFeatured extends Component
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
        $manga = Komik::where("status","ongoing")->orderBy("id","Desc")->limit(8)->get();
        return view('components.content.comic-featured',compact('manga'));
    }
}
