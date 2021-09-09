<?php

namespace App\View\Components\Admin;

use App\Models\Manga\Chapter;
use Illuminate\View\Component;

class ReadingpdfComponent extends Component
{ 

     /**
     * The alert type.
     *
     * @var string
     */
    public $type;


    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $manga = Chapter::findOrFail($this->type); 
        return view('components.admin.readingpdf-component',compact('manga'));
    }
}
