<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWineriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wineries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('signature');
            $table->text('description');
            $table->string('header_image');
            $table->string('logo_image');
            $table->string('catalog_image');
            $table->integer('region_id');
            $table->string('seo_title')->nullable();
            $table->integer('type_id');
            $table->integer('layout_id');
            $table->integer('subscribe_status')->default(1);
            $table->string('slug');
            $table->string('coordinate_lat');
            $table->string('coordinate_lon');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
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
        Schema::dropIfExists('wineries');
    }
}
