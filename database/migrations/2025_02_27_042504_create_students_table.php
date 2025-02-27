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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('email', 45)->unique();
            $table->string('password', 45);
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->date('dob');
            $table->string('phone', 15);
            $table->string('mobile', 15);
            $table->foreignId('parent_id')->constrained('parents')->onDelete('cascade');
            $table->date('date_of_join')->nullable();
            $table->boolean('status')->default(true);
            $table->date('last_login_date')->nullable();
            $table->string('last_login_ip', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
