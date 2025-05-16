<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexTeble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_teble', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('first_name');
            $table->string('sex');
            $table->string('email');
            $table->string('tell');
            $table->string('address');
            $table->string('building');
            $table->string('kinds');
            $table->string('oder');
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
        Schema::dropIfExists('index_teble');
    }
}
