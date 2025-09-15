<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        return view('mapa'); //goes to resources/views/mapa.blade.php
    }
}
