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
        Schema::table('crescents', function (Blueprint $table) {
            $table -> text('image')->nullable()->after('id');
            $table -> text('content')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('crescents', function (Blueprint $table) {
            $table->dropColumn(['image','content']);
        });
    }
};
