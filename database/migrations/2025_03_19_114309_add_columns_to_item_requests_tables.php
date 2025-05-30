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
        Schema::table('itemRequests', function (Blueprint $table) {
            $table->longText('image')->nullable();
            $table->longText('images')->nullable();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itemRequests', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('images');
        });
    }
};
