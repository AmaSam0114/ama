<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeWorkCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_work_cycles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_work_cycle_id');
            $table->unsignedBigInteger('fk_employee_id');
            $table->timestamp('check_in');
            $table->timestamp('check_out');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('fk_work_cycle_id')
                ->references('id')->on('work_cycles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_employee_id')
                ->references('id')->on('employees')
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
        Schema::dropIfExists('employee_work_cycles');
    }
}
