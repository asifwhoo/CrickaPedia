<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconicMomentsTable extends Migration
{
    public function up()
    {
        Schema::create('iconic_moments', function (Blueprint $table) {
            $table->id();
            $table->string('iconic_name');
            $table->string('player_name');
            $table->date('date');
            $table->text('history')->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('iconic_moments');
    }
}
