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
        Schema::create('data_bonus_urls', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('website');
            $table->string('linkevent');
            $table->string('gifevent');
            $table->string('banner_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_bonus_urls');
    }
};
