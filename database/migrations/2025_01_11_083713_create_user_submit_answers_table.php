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
        Schema::create('user_submit_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_topic_id')->constrained('training_topics')->onDelete('cascade');
            $table->string('emp_id');
            $table->json('question_answers');
            $table->float('score', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_submit_answers');
    }
};
