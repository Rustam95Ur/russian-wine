<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('body');
            $table->string('main_image')->nullable();
            $table->text('terroir');
            $table->text('vineyard_start');
            $table->text('vineyard_end');
            $table->text('winemaking');
            $table->string('banner_image');
            $table->string('vineyard_image')->nullable();
            $table->string('winemaking_image')->nullable();
            $table->string('coordinate_lat');
            $table->string('coordinate_lon');
            $table->integer('quote_id')->nullable();
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
        Schema::dropIfExists('regions');
    }
}
