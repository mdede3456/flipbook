<?php

namespace App\View\Components\Content;

use App\Models\FlipBook;
use App\Models\Website\Viewer;
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
        $top = Viewer::selectRaw("count(id) as jumlah, content_id as content")
            ->where("type", "majalah")
            ->groupBy("content")
            ->orderBy("jumlah", "desc")
            ->limit(3)->get();

        $other = Viewer::selectRaw("count(id) as jumlah, content_id as content")
            ->where("type", "majalah")
            ->groupBy("content")
            ->orderBy("jumlah", "desc")
            ->limit(11)->get();
        return view('components.content.top-book', compact('top', 'other'));
    }
}
