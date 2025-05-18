<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type')->default('mariage');
            $table->string('ville');
            $table->string('adresse');
            $table->text('description');
            $table->integer('capacite');
            $table->decimal('prix', 10, 2);
            $table->string('image')->nullable();
            $table->json('amenities')->nullable();
            $table->json('features')->nullable();
            $table->boolean('is_premium')->default(false);
            $table->string('availability_hours')->nullable();
            $table->integer('parking_capacity')->nullable();
            $table->integer('square_meters')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salles');
    }
}; 