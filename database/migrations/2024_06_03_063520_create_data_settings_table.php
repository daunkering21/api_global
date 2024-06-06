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
        Schema::create('data_settings', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('website')->unique();
            $table->string('home');
            $table->string('server1');
            $table->string('server2');
            $table->string('server3');
            $table->string('promo');
            $table->string('hadiah');
            $table->string('jadwal');
            $table->string('rtp');
            $table->string('syair');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('line');
            $table->string('livechat');
            $table->string('whatsapp');
            $table->string('telegram');
            $table->boolean('switch_sticky')->default(0);
            $table->string('deposit')->nullable();
            $table->string('klasemen')->nullable();
            $table->string('peraturan')->nullable();
            $table->string('livescore')->nullable();
            $table->string('prediksi')->nullable();
            $table->string('linkalternatif1');
            $table->string('linkalternatif2');
            $table->string('linkalternatif3');
            $table->string('linkalternatif4');
            $table->string('linkalternatif5');
            $table->string('linkdownload');
            $table->string('version_apk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_settings');
    }
};
