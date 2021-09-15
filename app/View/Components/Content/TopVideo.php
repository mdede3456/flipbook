<?php

namespace App\View\Components\Content;

use App\Models\Video\Video;
use Illuminate\View\Component;

class TopVideo extends Component
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
        $video = Video::where("status",1)->where("unggulan","ya")->limit(6)->get();
        return view('components.content.top-video',compact('video'));
    }
}
