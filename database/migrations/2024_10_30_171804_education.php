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
        Schema::create('educationInfo', function (Blueprint $table) {
            $table->id();
            $table->string('schoolLevel');
            $table->string('schoolName');
            $table->string('courseTaken');
            $table->string('schoolAddress');
            $table->string('academicYear');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
