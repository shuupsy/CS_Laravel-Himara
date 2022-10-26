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
        Schema::create('room_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')
                ->nullable()
                ->constrained();
            $table->unsignedBigInteger('rating')->nullable()->default(null);
            $table->text('review')->nullable()->default(null);
            $table->boolean('is_Filled')
            ->default(0);
            $table->boolean('is_Active')
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
        Schema::dropIfExists('reviews');
    }
};
