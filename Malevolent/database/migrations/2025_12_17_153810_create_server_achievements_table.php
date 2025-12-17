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
        Schema::create('server_achievements', function (Blueprint $table) {
            $table->id();
            $table->string('server_achievement_title');
            $table->string('server_achievement_description');
            $table->string('server_achievement_statistic');
            $table->unsignedBigInteger('server_achievement_statistic_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_achievements');
    }
};
