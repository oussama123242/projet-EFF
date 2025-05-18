<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration for services table
return new class extends Migration {
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
    $table->id('id_service');
    $table->enum('type', ['locale', 'tréteur', 'animateur', 'décorateur', 'photographe']);
    $table->decimal('prix_min', 8, 2);
    $table->decimal('prix_max', 8, 2);
    $table->string('localisation_maps');
    $table->enum('etat', ['disponible', 'non disponible']);
    $table->json('photos')->nullable(); // Storing multiple photos
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};