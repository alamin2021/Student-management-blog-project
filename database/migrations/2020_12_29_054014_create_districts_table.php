<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('distirct_name')->nullable();
            $table->integer('division_id')->unsigned();
            $table->timestamps();
            $table->foreign('divisions_id')->references('id')->on('divisions');
            // $table->foreignId('divisions_id')->constrained();
            // $table->foreign('divisions_id')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
