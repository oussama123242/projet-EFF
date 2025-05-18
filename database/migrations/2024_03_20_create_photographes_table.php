<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('photographes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('style');
            $table->text('description');
            $table->decimal('prix_base', 10, 2);
            $table->decimal('rating', 2, 1);
            $table->integer('nombre_avis');
            $table->string('badge');
            $table->json('services');
            $table->json('images_gallery');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('photographes');
    }
}; 