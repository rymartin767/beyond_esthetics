<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use App\Models\Employee;

class AboutController extends Controller
{
    public function __invoke()
    {
        $id = Service::where('name', 'General')->sole()->id;
        $employees = Employee::with('image')->get();

        return view('about', [
            'tonya' => $employees->where('name', '==', 'Tonya Goulding')->first(),
            'employees' => $employees->where('name', '!=', 'Tonya Goulding'),
            'faqs' => Faq::where('service_id', $id)->get()
        ]);
    }
}
