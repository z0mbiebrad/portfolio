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
        Schema::create('headings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')
                ->constrained('documents')
                ->onDelete('cascade');
            $table->string('text');
            $table->unsignedTinyInteger('level');
            $table->string('section');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('headings');
    }
};