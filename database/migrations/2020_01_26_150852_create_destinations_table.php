<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image');
            $table->text('brief');
            $table->longText('description');
            $table->string('duration')->nullable();
            $table->longText('itinerary')->nullable();
            $table->string('price')->nullable();
            $table->longText('priceinclude')->nullable();
            $table->boolean('banner')->default(0);
            $table->boolean('gallery')->default(0);
            $table->boolean('nav')->default(0);
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
        Schema::dropIfExists('destinations');
    }
}
