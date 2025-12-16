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
        Schema::create('server_leaderboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_id')->constrained('servers');
            $table->string('server_map');
            $table->integer('server_round');
            $table->string('server_players');
            $table->integer('server_player_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_leaderboards');
    }
};
