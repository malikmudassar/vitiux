<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MoreVideos extends Component
{
    public $items;
    public $title;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $title, $class)
    {
        $this->items = $items;
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.more-videos');
    }
}
