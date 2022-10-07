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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('mainphoto_path');
            $table->text('description1');
            $table->text('description2');
            $table->unsignedBigInteger('surface');
            $table->unsignedBigInteger('nb_persons');
            $table->foreignId('room_category_id')
            ->constrained('room_categories');
            $table->unsignedBigInteger('rating')
            ->nullable();
            $table->boolean('is_Available');
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
        Schema::dropIfExists('rooms');
    }
};
