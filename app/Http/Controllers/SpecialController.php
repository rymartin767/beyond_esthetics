<?php

namespace App\Http\Controllers;

use App\Models\Special;

class SpecialController extends Controller
{
    public function __invoke()
    {
        $specials = Special::current()->get();
        return view('specials.index', compact('specials'));
    }
}
