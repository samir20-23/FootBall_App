<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Team name
            $table->integer('matches_played')->default(0); // Matches played
            $table->integer('wins')->default(0); // Wins
            $table->integer('draws')->default(0); // Draws
            $table->integer('losses')->default(0); // Losses
            $table->integer('goals_for')->default(0); // Goals scored
            $table->integer('goals_against')->default(0); // Goals conceded
            $table->integer('goal_difference')->default(0); // Goal difference
            $table->integer('points')->default(0); // Points
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
