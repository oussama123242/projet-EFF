<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::table('salles', function (Blueprint $table) {
        if (!Schema::hasColumn('salles', 'capacite')) {
            $table->integer('capacite')->nullable();
        }

        if (!Schema::hasColumn('salles', 'adresse')) {
            $table->string('adresse')->nullable();
        }

        if (!Schema::hasColumn('salles', 'prix')) {
            $table->integer('prix')->nullable();
        }

        // 'description' already exists, so we skip it
    });
}

public function down(): void
{
    Schema::table('salles', function (Blueprint $table) {
        $table->dropColumn(['capacite', 'adresse', 'prix']);
        // we don't drop 'description' because it already exists from before
    });
}


};
