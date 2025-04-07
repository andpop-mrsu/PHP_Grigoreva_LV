<?php

use WebUser\Database\Migrations\Migration;
use WebUser\Database\Schema\Blueprint;
use WebUser\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');
            $table->string('expression');
            $table->integer('user_answer');
            $table->integer('correct_answer');
            $table->boolean('is_correct');
            $table->timestamp('played_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
