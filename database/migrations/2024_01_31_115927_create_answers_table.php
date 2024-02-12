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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->string('isCorrect');
            $table->unsignedBigInteger('quiz_id');
            $table->timestamps();
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
