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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('description', 255);
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnUpdate();
            $table->foreignId('user_booked')->constrained('users')->cascadeOnUpdate()->cascadeOnUpdate();
            $table->integer('payment');
            $table->boolean('is_deleted')->default(false);
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
        Schema::dropIfExists('bookings');
    }
};
