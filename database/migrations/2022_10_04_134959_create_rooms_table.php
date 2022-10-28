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
            $table->string('photo')
                ->nullable();
            $table->unsignedBigInteger('surface');
            $table->unsignedBigInteger('nb_persons');
            $table->foreignId('room_category_id')
            ->constrained();
            $table->unsignedBigInteger('rating')
            ->nullable()
            ->default(null);
            $table->unsignedBigInteger('in_Sale')
                ->nullable()
                ->default(null);
            $table->boolean('is_Available')
                ->default(1);
            $table->boolean('is_Published')
                ->default(0);
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
