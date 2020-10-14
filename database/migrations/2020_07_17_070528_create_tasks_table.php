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
            $table->biginteger('intern_id');
            $table->id('task_id');
            $table->text('task_name');
            $table->text('task_assigned_by');
            $table->text('task_assigned_to');
            $table->datetime('task_date_created');
            $table->datetime('task_due_date');
            $table->text('task_description');
            $table->boolean('task_is_submitted');
            $table->integer('task_grade');
            $table->string('task_department');
            $table->date('task_submitted_date')->nullable();
            $table->text('task_link')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
