<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Objectives extends Component
{
    public string $title;
    public array $items;
    public string $variant; // "left" ou "right" para mudar cor e seta

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, array $items, string $variant = 'left')
    {
        $this->title = $title;
        $this->items = $items;
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.objectives');
    }
}
