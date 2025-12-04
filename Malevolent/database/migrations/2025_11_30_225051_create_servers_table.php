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
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('server_ip');
            $table->integer('server_port')->unique();
            $table->string('server_map')->default('Town');
            $table->string('server_round')->default(0)->index();
            $table->string('server_players')->nullable();
            $table->integer('server_players_count')->default(0);
            $table->integer('server_players_max')->default(0);
            $table->string('server_password')->nullable();
            $table->boolean('server_maintenance')->default(true);
            $table->unsignedBigInteger('server_kills')->default(0)->index();
            $table->unsignedBigInteger('server_downs')->default(0)->index();
            $table->unsignedBigInteger('server_revives')->default(0)->index();
            $table->unsignedBigInteger('server_headshots')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
