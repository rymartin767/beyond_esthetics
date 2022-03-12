<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Faq;

class AboutController extends Controller
{
    public function __invoke()
    {
        $faqs = Faq::all();
        $half = ceil($faqs->count() / 2);
        $chunks = $faqs->chunk($half);

        return view('about', [
            'employees' => Employee::all(),
            'faqs' => $chunks
        ]);
    }
}
