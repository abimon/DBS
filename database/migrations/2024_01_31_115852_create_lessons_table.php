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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('study_id');
            $table->string('lesson_title');
            $table->string('slug');
            $table->longText('content');
            $table->timestamps();
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
