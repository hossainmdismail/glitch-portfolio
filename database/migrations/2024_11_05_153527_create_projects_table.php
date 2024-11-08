<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 155);
            $table->string('thumbnail', 120);
            $table->string('services', 300); // array
            $table->longText('content');
            $table->string('client', 120)->nullable();
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->string('seo_title', 150)->nullable();
            $table->string('seo_description', 400)->nullable();
            $table->string('seo_tags', 400)->nullable(); //array
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
