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
        Schema::create('user_missions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('server_missions')->cascadeOnDelete();
            $table->string('user_mission_title');
            $table->string('user_mission_description');
            $table->string('user_mission_statistic');
            $table->unsignedBigInteger('user_mission_statistic_amount');
            $table->unsignedBigInteger('user_mission_statistic_amount_start');
            $table->unsignedBigInteger('user_mission_reward');
            $table->enum('user_missions_type', ['daily', 'weekly', 'bi-weekly', 'monthly'])->default('daily');
            $table->boolean('user_mission_claimed')->default(false);
            $table->timestamp('user_mission_expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_missions');
    }
};
