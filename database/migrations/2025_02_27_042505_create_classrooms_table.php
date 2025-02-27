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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id('classroom_id');
            $table->year('year');
            $table->foreignId('grade_id')->constrained('grades')->onDelete('cascade');
            $table->string('section', 2);
            $table->boolean('status')->default(true);
            $table->string('remarks', 45)->nullable();
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
