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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string("name", 20);
            $table->string("species", 20);
            $table->string("habitat", 40);
            $table->string("exposure", 30);
            $table->text("description", 200);
            $table->char("image", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
