<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->text('description')->nullable();
            $table->text('production_feature')->nullable();
            $table->text('combination')->nullable();
            $table->text('feature')->nullable();
            $table->text('innings')->nullable();
            $table->string('model');
            $table->integer('winery_id');
            $table->integer('grape_sort_id');
            $table->integer('edition');
            $table->integer('manufacturer_id');
            $table->integer('region_id');
            $table->integer('color_id');
            $table->integer('fortress');
            $table->integer('year');
            $table->string('volume');
            $table->integer('count');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description');
            $table->text('meta_keywords');
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
        Schema::dropIfExists('products');
    }
}
