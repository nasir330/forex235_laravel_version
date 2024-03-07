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
        Schema::create('become_trader_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->unsigned()->constrained('become_trader_pages')->onUpdate('cascade')->onDelete('cascade');
            $table->string('post_title');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('become_trader_posts');
    }
};
