<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('song_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->constrained('songs')->cascadeOnDelete();
            $table->foreignId('listener_id')->constrained('listeners')->cascadeOnDelete();
            $table->unsignedTinyInteger('rating');
            $table->text('comment')->nullable();
            $table->timestamp('rated_at')->nullable();
            $table->timestamps();

            $table->unique(['song_id', 'listener_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('song_ratings');
    }
};
