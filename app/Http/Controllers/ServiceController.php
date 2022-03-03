<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::find($id);
        return view('services.show', compact('service'));
    }
}
