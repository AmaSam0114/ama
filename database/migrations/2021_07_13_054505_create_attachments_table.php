<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_attachment_job_id')->nullable();
            $table->unsignedBigInteger('fk_attachment_task_id')->nullable();
            $table->longText('url');
            $table->string('name');
            $table->enum('type', ['img', 'pdf']);
            $table->decimal('size');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_attachment_job_id')
                ->references('id')->on('jobs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_attachment_task_id')
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
        Schema::dropIfExists('attachments');
    }
}
