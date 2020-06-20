<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('model');
            $table->integer('price');
            $table->integer('year');
            $table->string('image');
            $table->string('slug');
            $table->string('count');
            $table->integer('prev_set_id')->nullable();
            $table->integer('next_set_id')->nullable();
            $table->integer('next_category_set_id')->nullable();
            $table->integer('prev_category_set_id')->nullable();
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
        Schema::dropIfExists('sets');
    }
}
