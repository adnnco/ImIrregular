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
        Schema::create('irregular_verbs', function (Blueprint $table) {
            $table->id();
            $table->string('infinitive')->unique();
            $table->string('past_simple');
            $table->string('past_participle');
            $table->string('translation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irregular_verbs');
    }
};
