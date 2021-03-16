<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpazilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('upazilas', function (Blueprint $table) {
            $table->id();
            $table->string('upazila_name')->nullable();
            $table->integer('division_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->timestamps();

            // $table->foreignId('divisions_id')->constrained();
            // $table->foreignId('districts_id')->constrained();

            $table->foreign('divisions_id')->references('id')->on('divisions');
            $table->foreign('districts_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upazilas');
    }
}
