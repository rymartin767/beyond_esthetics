<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents('public/employees.json');
        $employees = json_decode($file);
        foreach($employees as $emp) {
            Employee::create([
                'name' => $emp->name,
                'title' => $emp->title,
                'qualifications' => $emp->qualifications,
                'bio' => $emp->bio
            ]);
        }

        $file2 = file_get_contents('public/services.json');
        $services = json_decode($file2);
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
