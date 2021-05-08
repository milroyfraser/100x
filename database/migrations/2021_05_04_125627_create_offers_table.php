<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price');
            $table->integer('quantity_in_hand');
            $table->dateTime('published_at')->nullable();
            $table->dateTime('ends_at');
            $table->timestamps();

            $table->foreignId('category_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
