<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CircleBoardLeft extends Component
{
    public $texto;

    public function __construct( $text = '', $title = '', $orcid = '', $lattes = '', $imagePath = '')
    {
        $this->text = $text;
        $this->title = $title;
        $this->orcid = $orcid;
        $this->lattes = $lattes;
        $this->imagePath = $imagePath;
    }

    public function render()
    {
        return view('components.circleboardleft');
    }
}
