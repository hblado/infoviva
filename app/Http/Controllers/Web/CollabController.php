<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    public function index()
    {
        return view('colaboracao'); //goes to resources/views/colaboracao.blade.php
    }
}
