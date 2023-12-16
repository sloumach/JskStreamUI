<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastGameTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lastGames', function (Blueprint $table) {
            $table->id();
            $table->string('teamA', 50);
            $table->string('teamB', 50);
            $table->integer('scoreA');
            $table->integer('scoreB');
            $table->integer('gameWeek');
            $table->date('gameDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_game');
    }
};
