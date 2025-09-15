<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextNoBg extends Component
{
    public $text;
    public function __construct($text = '')
    {
        $this->text = $text;
    }
    public function render(): View|Closure|string
    {
        return view('components.text-no-bg');
    }
}
