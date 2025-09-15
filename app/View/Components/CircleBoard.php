<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CircleBoard extends Component
{
    public $texto;

    public function __construct( $text = '', $title = '')
    {
        $this->text = $text;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.circleboard');
    }
}
