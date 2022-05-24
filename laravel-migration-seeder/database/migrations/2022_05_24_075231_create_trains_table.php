<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time')->nullable($value=true);
            $table->time('arrival_time')->nullable($value=true);
            $table->unsignedMediumInteger('train_code');
            $table->unsignedSmallInteger('n_carriage');
            $table->boolean('on_time');
            $table->boolean('deleted');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
