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
        Schema::create('server_missions', function (Blueprint $table) {
            $table->id();
            $table->string('server_mission_title');
            $table->string('server_mission_description');
            $table->string('server_mission_statistic');
            $table->unsignedBigInteger('server_mission_statistic_amount');
            $table->unsignedBigInteger('server_mission_reward');
            $table->enum('server_missions_type', ['daily', 'weekly', 'bi-weekly', 'monthly'])->default('daily');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_missions');
    }
};
