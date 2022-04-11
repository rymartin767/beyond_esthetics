<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('name', '!=', 'General')->with('images')->get();
        return view('services.index', [
            'services' => $services
        ]);
    }

    public function show(Service $service)
    {
        return view('services.show', [
            'service' => $service->load('treats.image', 'reviews', 'faqs'),
        ]);
    }
}
