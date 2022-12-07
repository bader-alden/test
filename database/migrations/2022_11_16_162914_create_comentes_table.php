<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentes', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('photo');
            $table->integer('num');
            $table->integer('num-add');
            $table->text('min_price');
            $table->integer('price');
            $table->foreign('comment_id')->references('detail')->on('mains');
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
        Schema::dropIfExists('comentes');
    }
};
