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
        Schema::table('managingcoms', function (Blueprint $table) {
            $table->text('image')->nullable()->after('id');
            $table->string('title')->nullable()->after('image');
            $table->string('position')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('managingcoms', function (Blueprint $table) {
            $table->dropColumn(['image','title', 'position']);
        });
    }
};
