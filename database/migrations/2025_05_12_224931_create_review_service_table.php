<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration for review_service table
return new class extends Migration {
    public function up()
    {
        Schema::create('review_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('prestataire_id')->constrained('prestataires');
            $table->foreignId('service_id')->constrained('services', 'id_service'); // التعديل هنا
            $table->text('description');
            $table->tinyInteger('etoile');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_service');
    }
};
