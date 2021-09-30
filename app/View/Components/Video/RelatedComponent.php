<?php

namespace App\View\Components\Video;

use App\Models\Video\Video;
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
        $video = Video::where("status", 1)->orderBy("id", "desc")->limit(4)->get();
        return view('components.video.related-component', compact('video'));
    }
}
