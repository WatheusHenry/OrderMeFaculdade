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
         Schema::create('pomodoro', function (Blueprint $table) {
                    $table->id();
                    $table->date('Data');
                    $table->integer('Ciclos');
        //            $table->unsignedInteger('User_id');
        //            $table->foreign('User_id')-> references('id')->on('users');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pomodoro');
    }
};
