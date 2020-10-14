<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
	        $table->string('address')->nullable();
            $table->string('year');
            $table->string('course');
            $table->string('school');
            $table->string('department');
            $table->string('role');
            $table->date('date_started');
            $table->date('end_date');
            $table->integer('banner')->nullable();
            $table->text('introduction');
            $table->text('profile_picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
