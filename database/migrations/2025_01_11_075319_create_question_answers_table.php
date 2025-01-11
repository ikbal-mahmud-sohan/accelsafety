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
        Schema::create('question_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_topic_id')->constrained('training_topics')->onDelete('cascade');
            $table->text('questions');
            $table->text('answer');
            $table->text('fake_answer_1');
            $table->text('fake_answer_2');
            $table->text('fake_answer_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_answers');
    }
};
