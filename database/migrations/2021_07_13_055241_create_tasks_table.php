<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_task_job_id');
            $table->enum('unit', ['hour', 'space'])->default('hour');
            $table->bigInteger('estimated_time');
            $table->longText('description');
            $table->decimal('charge');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_task_job_id')
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
        Schema::dropIfExists('tasks');
    }
}
