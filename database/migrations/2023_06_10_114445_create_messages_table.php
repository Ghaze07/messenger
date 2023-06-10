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
            $table->unsignedBigInteger('author_id')->index();
            $table->foreign('author_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('recipient_id')->index();
            $table->foreign('recipient_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->longText('content');
            $table->dateTime('sent_at')->nullable();
            $table->dateTime('recieved_at')->nullable();
            $table->dateTime('delete_by_author_at')->nullable();
            $table->dateTime('delete_by_recipient_at')->nullable();
            $table->timestamps();
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
