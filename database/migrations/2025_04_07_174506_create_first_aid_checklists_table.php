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
        Schema::create('first_aid_checklists', function (Blueprint $table) {
            $table->id();
            $table->string('box_no')->nullable();
            $table->string('location')->nullable();
            $table->string('authorized_person')->nullable();
            $table->string('contact_no')->nullable();
            $table->json('data')->nullable();
            $table->text('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('first_aid_checklists');
    }
};
