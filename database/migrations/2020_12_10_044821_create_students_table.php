<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('u_name');
            $table->string('mobile');
            $table->string('email');
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('divisions_id')->nullable();
            $table->string('districts_id')->nullable();
            $table->string('upazilas_id')->nullable();
            $table->string('village')->nullable();
            $table->string('unions')->nullable();
            $table->string('wordno')->nullable();
            $table->string('departments_id')->nullable();
            $table->string('course_id')->nullable();
            $table->string('std_id');
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
        Schema::dropIfExists('students');
    }
}
