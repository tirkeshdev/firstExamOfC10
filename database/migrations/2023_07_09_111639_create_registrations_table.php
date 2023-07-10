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
        {
            Schema::create('registrations', function (Blueprint $table) {
                $table->id();
                $table->integer('price')->default(0);
                $table->unsignedBigInteger('lesson_id')->index();
                $table->foreign('lesson_id')->references('id')->on('lessons')->cascadeOnDelete();
                $table->unsignedBigInteger('student_id')->index();
                $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
