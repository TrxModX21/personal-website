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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 40)->nullable();
            $table->string('base_color', 40)->nullable();
            $table->string('secondary_color', 40)->nullable();
            $table->boolean('force_ssl')->default(0);
            $table->boolean('maintenance_mode')->default(0);
            $table->boolean('secure_password')->default(0);
            $table->text('system_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
