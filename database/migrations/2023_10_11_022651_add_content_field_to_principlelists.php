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
        Schema::table('principlelists', function (Blueprint $table) {
            $table->string('name')->nullable()->after('id');
            $table->string('profession')->nullable()->after('name');
            $table->string('duration')->nullable()->after('profession');
            $table->string('mobile')->nullable()->after('duration');
            $table->string('email')->nullable()->after('mobile');
            $table->text('image')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('principlelists', function (Blueprint $table) {
            $table->dropColumn(['name', 'profession','duration','mobile','email','image']);
        });
    }
};
