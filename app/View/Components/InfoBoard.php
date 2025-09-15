<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoBoard extends Component
{
    public $texto;

    public function __construct( $text = '', $title = '')
    {
        $this->text = $text;
        $this->title = $title;
    }
    public function render(): View|Closure|string
    {
        return view('components.infoboard');
    }
}
