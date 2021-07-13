<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkCycleTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_cycle_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_work_cycle_tasks_work_cycle_id');
            $table->unsignedBigInteger('fk_work_cycle_tasks_task_id');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('complete_time')->nullable();
            $table->longText('inspection_remark')->nullable();
            $table->longText('client_remark')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('fk_work_cycle_tasks_work_cycle_id')
                ->references('id')->on('work_cycle_tasks')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_work_cycle_tasks_task_id')
                ->references('id')->on('tasks')
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
        Schema::dropIfExists('work_cycle_tasks');
    }
}
