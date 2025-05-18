<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('review_site', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients');
            $table->text('description');
            $table->tinyInteger('etoile');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_site');
    }
};
