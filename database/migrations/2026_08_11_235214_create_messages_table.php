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
        Schema::create('messages', function (Blueprint $table) {

    $table->id();

    $table->uuid('uuid')->unique();

    $table->foreignId('group_id')
        ->constrained('chat_groups')
        ->cascadeOnDelete();

    $table->foreignId('user_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->longText('message')->nullable();

    $table->enum('type',[
        'text',
        'image',
        'file'
    ])->default('text');

    $table->foreignId('reply_to')
        ->nullable()
        ->constrained('messages')
        ->nullOnDelete();

    $table->boolean('is_edited')->default(false);

    $table->timestamps();

    $table->softDeletes();

    $table->index(['group_id','created_at']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
