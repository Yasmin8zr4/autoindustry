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
        Schema::create('pecas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fabricante');
            $table->decimal('preco', 10, 2);
            $table->integer('quantidade');
            $table->string('num_de_serie');
            $table->foreignId('robos_id')->constrained('robos')->cascadeOnDelete();
            $table->dateTime('vida_util');
            $table->string('corredor');
            $table->string('prateleira');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pecas');
    }
};
