<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_treatment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('treatment_id')->constrained();
            $table->timestamps();

            $table->unique(['service_id', 'treatment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_treatment');
    }
};
