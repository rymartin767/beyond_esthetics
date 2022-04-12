<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Treatment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::all();

        foreach($services as $service) {
            foreach($service->treatments as $treatment) {
                $name = str($treatment)->replace('_', ' ')->title();
                $id = Treatment::where('name', $name)->first()->id;
                $service->treats()->attach($id);
            }
        };
    }
}
