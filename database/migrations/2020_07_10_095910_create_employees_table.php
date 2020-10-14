<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('position');
            $table->string('department');
            $table->integer('level');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('profile_picture')->nullable();
            $table->string('password');
            $table->string('generated_password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
