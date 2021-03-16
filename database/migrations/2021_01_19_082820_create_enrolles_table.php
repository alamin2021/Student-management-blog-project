<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolles', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->string('std_usr');
            $table->string('std_eamil');
            $table->string('dpt_name');
            $table->string('course_id');
            $table->string('teachers_id');
            $table->string('course_credit')->nullable();
            $table->string('course_code')->nullable();
            $table->string('t_credit')->nullable();
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
        Schema::dropIfExists('enrolles');
    }
}
