<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->date('date_evenement');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->integer('nombre_invites');
            $table->string('type_evenement');
            $table->json('services')->nullable();
            $table->text('commentaires')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}; 