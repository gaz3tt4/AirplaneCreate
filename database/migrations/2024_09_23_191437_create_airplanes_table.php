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
        Schema::create('airplanes', function (Blueprint $table) {
            $table->id('id');
            $table->timestamp('dt_include');
            $table->timestamp('dt_update')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->mediumText('brand');
            $table->string('model', 100);
            $table->integer('year');
            $table->boolean('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airplanes');
    }
};
