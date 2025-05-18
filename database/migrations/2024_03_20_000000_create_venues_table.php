<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('address');
            $table->text('description');
            $table->integer('capacity');
            $table->decimal('price', 10, 2);
            $table->decimal('rating', 2, 1)->default(0);
            $table->integer('rating_count')->default(0);
            $table->json('features')->nullable();
            $table->json('amenities')->nullable();
            $table->json('images')->nullable();
            $table->boolean('is_premium')->default(false);
            $table->string('availability_hours')->nullable();
            $table->integer('parking_capacity')->nullable();
            $table->integer('square_meters')->nullable();
            $table->string('type')->default('wedding');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venues');
    }
}; 