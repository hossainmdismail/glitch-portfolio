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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Basic post details
            $table->string('title')->index();
            $table->string('slug')->unique();

            // Content details
            $table->text('excerpt')->nullable(); // Short summary
            $table->longText('content'); // Full post content

            // Media & SEO
            $table->string('thumbnail')->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 500)->nullable();
            $table->string('seo_tags', 600)->nullable();

            // Status and metadata
            $table->boolean('is_published')->default(false);

            // Author & relationships
            $table->foreignId('user_id')->nullable();
            $table->foreignId('category_id')->nullable();


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
