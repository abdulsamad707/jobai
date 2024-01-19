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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email_address');
            $table->string('phone_no');
            $table->string('linkdien');
            $table->string('personal_website');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->json('experiences');
            $table->json('projects');
            $table->json('educations');
            $table->json('courses');
            $table->json('skills');
            $table->text('description');
            $table->string('type1');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
