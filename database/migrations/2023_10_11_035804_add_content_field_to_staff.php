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
        Schema::table('staff', function (Blueprint $table) {
            $table->string('name')->nullable()->after('id');
            $table->string('profession')->nullable()->after('name');
            $table->DATE('joindate')->nullable()->after('profession');
            $table->string('mobile')->nullable()->after('joindate');
            $table->string('email')->nullable()->after('mobile');
            $table->text('image')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn(['name', 'profession','joindate','mobile','email','image']);
        });
    }
};
