<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinemakerWineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winemaker_wine', function (Blueprint $table) {
            $table->id();
            $table->integer('winemaker_id')->unsigned();
            $table->foreign('winemaker_id')->references('id')->on('winemakers')->onDelete('cascade');
            $table->integer('wine_id')->unsigned();
            $table->foreign('wine_id')->references('id')->on('wines');
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
        Schema::dropIfExists('winemaker_wine');
    }
}
