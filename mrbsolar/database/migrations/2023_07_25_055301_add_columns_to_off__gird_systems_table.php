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
        Schema::table('off__gird_systems', function (Blueprint $table) {
            $table->string('roof_of_area');
            $table->string('title');
            $table->string('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('off__gird_systems', function (Blueprint $table) {
            //
        });
    }
};
