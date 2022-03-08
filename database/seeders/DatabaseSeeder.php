<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $employees = json_decode(Storage::disk('public')->get('employees.json'));
        foreach($employees as $emp) {
            Employee::create([
                'name' => $emp->name,
                'title' => $emp->title,
                'qualifications' => null,
                'bio' => $emp->bio
            ]);
        }

        $services = json_decode(Storage::disk('public')->get('services.json'));
        foreach($services as $service) {
            Service::create([
                'name' => $service->name,
                'type' => $service->type,
                'locations' => $service->locations,
                'treatments' => [],
                'description' => $service->description,
                'bullets' => $service->bullets,
                'msrp' => null,
                'video_url' => $service->video_urls
            ]);
        }
    }
}
