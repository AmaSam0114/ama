<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_location_job_id');
            $table->timestamps();
            $table->string('no');
            $table->string('street');
            $table->string('city');
            $table->bigInteger('longitude');
            $table->bigInteger('latitude');
            $table->string('contact_person');
            $table->string('contact_number');
            $table->foreign('fk_location_job_id')
                ->references('id')->on('jobs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
