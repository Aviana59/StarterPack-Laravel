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
        Schema::create('kategori_berita', function (Blueprint $table) {
            $table->id();
            $table->string("ent", 100)->nullable(false);
            $table->string("politik", 100)->nullable(false);
            $table->string("ekonomi", 100)->nullable(false);
            $table->string("kesehatan", 100)->nullable(false);
            $table->string("sport", 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_berita');
    }
};
