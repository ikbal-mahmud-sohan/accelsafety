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
        if (!Schema::hasTable('hse_mobile_crane_planning_risk_assessment_docs')) {
            Schema::create('hse_mobile_crane_planning_risk_assessment_docs', function (Blueprint $table) {
                $table->id();
                $table->text('descriptions')->nullable();
                $table->string('created_change_history')->nullable();
                $table->string('approved_change_history')->nullable();
                $table->string('updated_change_history')->nullable();
                $table->unsignedBigInteger('approved_by')->nullable();
                $table->unsignedBigInteger('updated_by')->nullable();
                $table->unsignedBigInteger('created_by')->nullable();
                $table->timestamp('approved_date')->nullable();
                $table->timestamps();
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('hse_mobile_crane_planning_risk_assessment_docs');
    }
    
};
