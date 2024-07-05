<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('nationality');
            $table->string('batting_style');
            $table->string('bowling_style');
            $table->integer('runs_odi')->nullable();
            $table->integer('runs_t20')->nullable();
            $table->integer('runs_test')->nullable();
            $table->integer('wickets_odi')->nullable();
            $table->integer('wickets_t20')->nullable();
            $table->integer('wickets_test')->nullable();
            $table->string('best_runs')->nullable();
            $table->string('best_wickets')->nullable();
            $table->string('team_ipl');
            $table->string('team_bpl');
            $table->string('team_cpl');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
