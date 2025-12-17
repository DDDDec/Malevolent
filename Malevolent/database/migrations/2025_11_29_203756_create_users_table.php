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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->unsignedBigInteger('user_money')->default(config('malevolent.settings.users.default_money'))->index();
            $table->tinyInteger('user_rank')->default(config('malevolent.settings.users.default_rank'))->index();
            $table->tinyInteger('user_prestige')->default(config('malevolent.settings.users.default_prestige'))->index();
            $table->smallInteger('user_level')->default(config('malevolent.settings.users.default_level'))->index();
            $table->string('user_language')->default(config('malevolent.settings.users.default_language'))->index();
            $table->integer('user_color')->default(config('malevolent.settings.users.default_color'))->index();

            $table->boolean('user_online')->default(false)->index();
            $table->boolean('user_banned')->default(false)->index();

            $table->unsignedBigInteger('user_kills')->default(0)->index();
            $table->unsignedBigInteger('user_downs')->default(0)->index();
            $table->unsignedBigInteger('user_revives')->default(0)->index();
            $table->unsignedBigInteger('user_headshots')->default(0)->index();

            $table->unsignedBigInteger('user_boss_kills')->default(0)->index();
            $table->unsignedBigInteger('user_easter_eggs')->default(0)->index();
            $table->unsignedBigInteger('user_missions')->default(0)->index();
            $table->unsignedBigInteger('user_achievements')->default(0)->index();
            $table->unsignedBigInteger('user_interest_earned')->default(0)->index();
            $table->unsignedBigInteger('user_gambled')->default(0)->index();
            $table->unsignedBigInteger('user_chat_games')->default(0)->index();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
