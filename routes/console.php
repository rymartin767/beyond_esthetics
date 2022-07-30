<?php

use App\Models\Service;
use App\Models\Treatment;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('treat', function() {
    $services = Service::all();
    foreach($services as $service) {
        foreach($service->treatments as $treatment) {
            $t = Treatment::firstOrCreate(['name' => $treatment]);
            $service->treats()->attach($t);
        }
    }

    $this->info('Yum! Those treats were tasty.');
});
